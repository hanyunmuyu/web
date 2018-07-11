<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/11
 * Time: 16:47
 */

namespace App\Repositories\Api\v1;


use App\Models\ClubModel;

class ClubRepository
{
    public function getClubList()
    {
        return ClubModel::orderby('id', 'desc')->paginate(16);
    }
}