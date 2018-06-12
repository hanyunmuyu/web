<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 2018/6/12
 * Time: 21:23
 */

namespace App\Repositories\Home;


use App\Models\ClubModel;

class ClubRepository
{
    public function addClub($data)
    {
        return ClubModel::insert($data);
    }
}