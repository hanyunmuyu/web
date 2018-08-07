<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/7
 * Time: 15:17
 */

namespace App\Repositories\Api\v1;


use App\Models\SchoolPlayerModel;

class SchoolPlayerRepository
{
    public function getSchoolPlayer()
    {
        return SchoolPlayerModel::all();
    }
}