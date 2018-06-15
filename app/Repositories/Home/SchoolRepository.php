<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/15
 * Time: 17:47
 */

namespace App\Repositories\Home;


use App\Models\SchoolModel;
use Illuminate\Support\Facades\DB;

class SchoolRepository
{
    public function getSchoolListRandom($limit=6)
    {
        return SchoolModel::orderBy(DB::raw("RAND()"))
            ->limit($limit)
            ->get();
    }
}