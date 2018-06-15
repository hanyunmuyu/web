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

    public function getClubList($categoryIds = null)
    {
        return ClubModel::where(function ($q) use ($categoryIds) {
            if ($categoryIds) {
                $q->whereRaw("FIND_IN_SET({$categoryIds},category_ids)");
            }
        })->orderby('id', 'desc')->paginate(16);
    }

    /**
     * 我管理的社团数量
     * @param $uid
     * @return mixed
     */
    public function getClubMyManage($uid)
    {
        return ClubModel::where('create_user_id',$uid)->limit(6)->get();
    }

    /**
     * 随机推荐社团
     */
    public function getClubRandom()
    {
        return ClubModel::orderby(DB::raw("Rand()"))->limit(6)->get();
    }
}