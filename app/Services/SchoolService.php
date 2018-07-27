<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/25
 * Time: 14:49
 */

namespace App\Services;


use App\Models\ClubModel;
use App\Models\SchoolDepartmentModel;
use App\Models\SchoolModel;
use App\Models\SchoolSignInModel;
use App\Models\SchoolUserModel;

class SchoolService
{
    public function paySchoolAttention($schoolId, $userId)
    {
        if ($this->checkSchoolAttention($schoolId, $userId)) {
            $this->deleteSchoolAttention($schoolId, $userId);
        } else {
            $data = [];
            $data['school_id'] = $schoolId;
            $data['user_id'] = $userId;
            return SchoolUserModel::create($data);
        }
    }

    public function checkSchoolAttention($schoolId, $userId)
    {
        return SchoolUserModel::where('school_id', $schoolId)
            ->where('user_id', $userId)
            ->first();
    }

    public function deleteSchoolAttention($schoolId, $userId)
    {

        return SchoolUserModel::where('school_id', $schoolId)
            ->where('user_id', $userId)
            ->delete();
    }

    public function getSchoolById($schoolId)
    {
        return SchoolModel::where('id', $schoolId)->first();
    }

    public function getSchoolAttentionNumber($schoolId)
    {
        return SchoolUserModel::where('school_id', $schoolId)->count();
    }

    public function getSchoolClubNumber($schoolId)
    {
        return ClubModel::where('school_id', $schoolId)->count();
    }

    public function getSchoolDepartment($schoolId)
    {
        return SchoolDepartmentModel::where('school_id', $schoolId)->count();
    }

    public function signIn($schoolId, $userId)
    {
        $data = [];
        $data['school_id'] = $schoolId;
        $data['user_id'] = $userId;
        if (!$this->checkSignIn($schoolId, $userId)) {
            return SchoolSignInModel::create($data);
        }
    }

    public function checkSignIn($schoolId, $userId)
    {
        $data = [];
        $data['school_id'] = $schoolId;
        $data['user_id'] = $userId;
        return SchoolSignInModel::where('school_id', $schoolId)
            ->where('user_id', $userId)
            ->whereBetween('created_at', [date("Y-m-d"), date('Y-m-d', strtotime('+1day'))])
            ->first();
    }
}