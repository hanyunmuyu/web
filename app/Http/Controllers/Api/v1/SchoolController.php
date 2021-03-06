<?php

namespace App\Http\Controllers\Api\v1;

use App\Repositories\Api\v1\SchoolNewsRepository;
use App\Repositories\Api\v1\SchoolPlayerRepository;
use App\Repositories\Api\v1\SchoolRepository;
use App\Services\AttachmentService;
use App\Services\ClubService;
use App\Services\SchoolService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    protected $schoolRepository;
    private $schoolService;
    private $schoolNewsRepository;
    private $attachmentService;
    private $clubService;
    private $schoolPlayerRepository;

    public function __construct(
        SchoolRepository $schoolRepository,
        SchoolService $schoolService,
        SchoolNewsRepository $schoolNewsRepository,
        AttachmentService $attachmentService,
        ClubService $clubService,
        SchoolPlayerRepository $schoolPlayerRepository
    )
    {
        $this->schoolRepository = $schoolRepository;
        $this->schoolService = $schoolService;
        $this->schoolNewsRepository = $schoolNewsRepository;
        $this->attachmentService = $attachmentService;
        $this->clubService = $clubService;
        $this->schoolPlayerRepository = $schoolPlayerRepository;
    }

    public function index()
    {
        $schoolList = $this->schoolRepository->getSchoolList();
        $data = $this->formatPaginate($schoolList);
        if ($data) {
            foreach ($data['data'] as $key => $v) {
                $v['school_logo'] = config('constant.app_domain') . $v['school_logo'];
                $data['data'][$key] = $v;
            }
        }
//        $tmp = [];
//        $tmp['data'] = [];
//        if ($schoolList) {
//            $schoolList = $schoolList->toArray();
//            $data = $schoolList['data'];
//            $tmp['totalPage'] = $schoolList['last_page'];
//            $tmp['currentPage'] = $schoolList['current_page'];
//            foreach ($data as $v) {
//                $v['school_logo'] = config('constant.app_domain') . $v['school_logo'];
//                $tmp['data'][] = $v;
//            }
//        }
        return $this->success($data);
    }

    public function all()
    {
        $schoolList = $this->schoolRepository->getAllSchool();
        return $this->success($schoolList->toArray());
    }

    public function detail(Request $request)
    {
        $schoolId = $request->get('schoolId');
        if (!$schoolId) {
            return $this->error('高校id不可以为空');
        }
        $school = $this->schoolRepository->getSchoolDetail($schoolId);
        if (!$school) {
            return $this->error('高校不存在！');
        }
        if (auth('api')->check()) {
            $userId = auth('api')->id();

            if ($this->schoolService->checkSchoolAttention($schoolId, $userId)) {
                $school->isAttention = 1;
            } else {
                $school->isAttention = 0;
            }

            if ($this->schoolService->checkSignIn($schoolId, $userId)) {
                $school->isSignIn = 1;
            } else {
                $school->isSignIn = 0;
            }
        } else {
            $school->isAttention = 0;
        }
        $school->school_logo = config('constant.app_domain') . $school->school_logo;

        $school->club_number = $this->schoolService->getSchoolClubNumber($schoolId);
        $school->deparment_number = $this->schoolService->getSchoolDepartment($schoolId);
        $school->attention_number = $this->schoolService->getSchoolAttentionNumber($schoolId);
        return $this->success($school->toArray());
    }

    public function news(Request $request)
    {
        $schoolId = $request->get('schoolId');
        if (!$schoolId) {
            return $this->error('校园id不可以为空！');
        }
        $newsList = $this->formatPaginate($this->schoolNewsRepository->getNewsList($schoolId));
        if ($newsList) {
            $data = $newsList['data'];
            foreach ($data as $key => $v) {
                $imgList = array_map(function ($v) {
                    return config('constant.app_domain') . $this->attachmentService->getAttachmentById($v);
                }, explode(',', $v['image_list']));
                $data[$key]['image_list'] = $imgList;
            }
            $newsList['data'] = $data;
        }
        return $this->success($newsList);
    }

    public function recommend()
    {
        $schoolRecommendList = $this->formatPaginate($this->schoolRepository->getSchoolRecommendList());
        if ($schoolRecommendList) {
            $data = $schoolRecommendList['data'];
            foreach ($data as $key => $v) {
                $imgList = array_map(function ($v) {
                    return config('constant.app_domain') . $this->attachmentService->getAttachmentById($v);
                }, explode(',', $v['image_list']));
                $v['name'] = '';
                $v['logo'] = config('constant.app_domain') . '';
                $v['image_list'] = $imgList;

                if ($v['source'] == 'school') {
                    $school = $this->schoolService->getSchoolById($v['source_id']);
                    if ($school) {
                        $v['name'] = $school->school_name;
                        $v['logo'] = config('constant.app_domain') . $school->school_logo;
                    }
                } elseif ($v['source'] == 'club') {
                    $club = $this->clubService->getClubBydId($v['source_id']);
                    if ($club) {
                        $v['name'] = $club->club_name;
                        $v['logo'] = config('constant.app_domain') . $club->club_logo;
                    }
                }

                $data[$key] = $v;

            }
            $schoolRecommendList['data'] = $data;
        }
        $schoolRecommendList['player'] = [];
        $player = $this->schoolPlayerRepository->getSchoolPlayer();
        if ($player) {
            foreach ($player as $k => $value) {
                $value->image = config('constant.app_domain') . $this->attachmentService->getAttachmentById($value->image_id);
                $player->$k = $value;
            }
            $schoolRecommendList['player'] = $player->toArray();
        }
        return $this->success($schoolRecommendList);
    }
}
