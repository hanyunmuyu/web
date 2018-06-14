<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 2018/6/12
 * Time: 21:23
 */

namespace App\Repositories\Home;


use App\Models\ClubModel;
use Illuminate\Support\Facades\DB;

class ClubRepository
{
    public function addClub($data)
    {
        return ClubModel::insert($data);
    }

    public function getClubList($categoryIds=null)
    {
        return ClubModel::where(function ($q) use ($categoryIds) {
            if ($categoryIds) {
                $q->whereRaw("FIND_IN_SET({$categoryIds},category_ids)");
            }
        })->orderby('id', 'desc')->paginate(16);
    }
}