<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/27
 * Time: 17:00
 */

namespace App\Repositories\Api\v1;


use App\Models\SchoolNewsModel;

class SchoolNewsRepository
{
    public function getNewsList($schoolId)
    {
        return SchoolNewsModel::where('status', 1)
            ->where('school_id', $schoolId)
            ->orderby('id', 'desc')
            ->orderby('click_number', 'desc')
            ->paginate();
    }
}