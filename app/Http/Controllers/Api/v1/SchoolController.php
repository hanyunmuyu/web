<?php

namespace App\Http\Controllers\Api\v1;

use App\Repositories\Api\v1\SchoolRepository;
use App\Services\SchoolService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    protected $schoolRepository;
    private $schoolService;

    public function __construct(SchoolRepository $schoolRepository, SchoolService $schoolService)
    {
        $this->schoolRepository = $schoolRepository;
        $this->schoolService = $schoolService;
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
            if ($this->schoolService->checkSchoolAttention($schoolId, auth('api')->id())) {
                $school->isAttention = 1;
            } else {
                $school->isAttention = 0;
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
}
