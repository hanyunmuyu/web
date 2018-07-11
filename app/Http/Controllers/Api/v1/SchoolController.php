<?php

namespace App\Http\Controllers\Api\v1;

use App\Repositories\Api\v1\SchoolRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    protected $schoolRepository;

    public function __construct(SchoolRepository $schoolRepository)
    {
        $this->schoolRepository = $schoolRepository;
    }

    public function index()
    {
        $schoolList = $this->schoolRepository->getSchoolList();
        $tmp = [];
        $tmp['data'] = [];
        if ($schoolList) {
            $schoolList = $schoolList->toArray();
            $data = $schoolList['data'];
            $tmp['totalPage'] = $schoolList['last_page'];
            $tmp['currentPage'] = $schoolList['current_page'];
            foreach ($data as $v) {
                $v['school_logo'] = config('constant.app_domain') . $v['school_logo'];
                $tmp['data'][] = $v;
            }
        }
        return $this->success($tmp);
    }
}
