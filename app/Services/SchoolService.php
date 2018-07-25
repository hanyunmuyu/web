<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/25
 * Time: 14:49
 */

namespace App\Services;


use App\Models\SchoolModel;
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
}