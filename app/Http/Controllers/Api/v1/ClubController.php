<?php

namespace App\Http\Controllers\Api\v1;

use App\Repositories\Api\v1\ClubRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClubController extends Controller
{
    private $clubRepository;
    public function __construct(ClubRepository $clubRepository)
    {
        $this->clubRepository = $clubRepository;
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
}
