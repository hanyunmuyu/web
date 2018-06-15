<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/15
 * Time: 9:12
 */

namespace App\Repositories\Home;


use App\Models\ClubUserModel;

class ClubUserRepository
{
    public function payAttention($clubId, $uid, $status)
    {
        $res = ClubUserModel::where('club_id', $clubId)
            ->where('user_id', $uid)
            ->first();
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
}