<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/14
 * Time: 16:38
 */

namespace App\Repositories\Admin;


use App\Models\SchoolModel;

class SchoolRepository
{
    public function getSchoolList()
    {
        return SchoolModel::orderby('id', 'desc')->paginate(20);
    }
}