<?php

namespace App\Http\Controllers\Api\v1\profile;

use App\Services\SchoolService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    private $schoolService;

    public function __construct(SchoolService $schoolService)
    {
        $this->schoolService = $schoolService;
    }

    //
    public function payAttention(Request $request)
    {
        $schoolId = $request->get('schoolId');
        if (!$schoolId) {
            return $this->error('高校id不可以为空');
        }
        $school = $this->schoolService->getSchoolById($schoolId);
        if (!$school) {
            return $this->error('高校不存在！');
        }
        $user = auth('api')->user();
        $this->schoolService->paySchoolAttention($schoolId, $user->id);
        return $this->success([], '成功');
    }
}
