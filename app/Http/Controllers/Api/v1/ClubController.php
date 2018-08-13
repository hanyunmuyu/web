<?php

namespace App\Http\Controllers\Api\v1;

use App\Repositories\Api\v1\ClubRepository;
use App\Services\ClubService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClubController extends Controller
{
    private $clubRepository;
    private $clubService;

    public function __construct(ClubRepository $clubRepository, ClubService $clubService)
    {
        $this->clubRepository = $clubRepository;
        $this->clubService = $clubService;
    }

    public function index()
    {
        $clubList = $this->clubRepository->getClubList();
        $data = $this->formatPaginate($clubList);
        foreach ($data['data'] as $k => $v) {
            $v['club_logo'] = config('constant.app_domain') . $v['club_logo'];
            $data['data'][$k] = $v;
        }
        return $this->success($data);
    }

    public function category()
    {
        return $this->success($this->clubRepository->getClubCategory()->toArray());
    }

    public function detail(Request $request)
    {
        $clubId = $request->get('clubId');
        $club = $this->clubRepository->getClubById($clubId);
        if (!$club) {
            return $this->error('社团不存在');
        }
        $club->isAttented = 0;
        $club->club_logo = config('constant.app_domain') . $club->club_logo;
        if (auth('api')->check()) {
            $user = auth('api')->user();
            if ($this->clubService->checkClubUserAttention($user->id, $clubId)) {
                $club->isAttented = 1;
            }
        }
        $club->categories = $this->clubService->getClubCategory(explode(',', $club->category_ids))->toArray();
        return $this->success(['detail'=>$club->toArray()]);
    }
}
