<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/11
 * Time: 11:27
 */

namespace App\Repositories\Api\v1;


use App\Models\SchoolModel;

class SchoolRepository
{
    public function getSchoolList()
    {
        return SchoolModel::orderby('id', 'desc')->paginate(16);
    }
}