<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/15
 * Time: 9:12
 */

namespace App\Repositories\Home;


use App\Models\ClubModel;
use App\Models\ClubUserModel;

class ClubUserRepository
{
    public function payAttention($clubId, $uid, $status)
    {
        $res = ClubUserModel::where('club_id', $clubId)
            ->where('user_id', $uid)
            ->first();
        if ($status == 1) {
            ClubModel::where('id', $clubId)->increment('favorite_number');
        }
        if ($status == 3) {
            ClubModel::where('id', $clubId)->increment('member_number');
        }
        if ($res) {
            $res->status = $status;
            return $res->save();
        }
        return ClubUserModel::insert([
            'club_id' => $clubId,
            'user_id' => $uid,
            'status' => $status
        ]);
    }

    public function getClubUser($clubId, $uid)
    {
        return ClubUserModel::where('club_id', $clubId)
            ->where('user_id', $uid)
            ->first();
    }

    /**
     * 关注的社团数量
     * @param $uid
     * @return int
     */
    public function getMyClubNumber($uid): int
    {
        return ClubUserModel::where('user_id', $uid)
            ->count();
    }
}