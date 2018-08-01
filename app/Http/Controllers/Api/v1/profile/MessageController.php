<?php

namespace App\Http\Controllers\Api\v1\profile;

use App\Repositories\Api\v1\UserMessageRepository;
use App\Services\ClubService;
use App\Services\SchoolService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    private $userMessageRepository;
    private $clubService;
    private $schoolService;

    public function __construct(UserMessageRepository $userMessageRepository, ClubService $clubService, SchoolService $schoolService)
    {
        $this->userMessageRepository = $userMessageRepository;
        $this->clubService = $clubService;
        $this->schoolService = $schoolService;
    }

    public function index(Request $request)
    {
        $user = auth('api')->user();
        $userMessageList = $this->formatPaginate($this->userMessageRepository->getUserMessageList($user->id));
        $data = $userMessageList['data'];
        foreach ($data as $k => $v) {
            $v['logo'] = config('constant.app_domain');
            $v['name'] = '';
            if ($v['source'] == 'school') {
                $school = $this->schoolService->getSchoolById($v['source_id']);
                if ($school) {
                    $v['logo'] = config('constant.app_domain') . $school->school_logo;
                    $v['name'] = $school->school_name;
                }
            } elseif ($v['source'] == 'club') {
                $club = $this->clubService->getClubBydId($v['source_id']);
                if ($club) {
                    $v['logo'] = config('constant.app_domain') . $club->club_logo;
                    $v['name'] = $club->club_name;

                }
            }
            $data[$k] = $v;
        }
        $userMessageList['data'] = $data;
        return $this->success($userMessageList);
    }
}
