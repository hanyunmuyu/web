<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/25
 * Time: 14:47
 */

namespace App\Services;


use App\Models\ClubUserModel;

class ClubService
{
    public function payClubAttention($userId, $clubId)
    {
        if ($this->checkClubUserAttention($userId,$clubId)) {
            $this->deleteClubUserAttention($userId, $clubId);
        }else{
            $data = [];
            $data['user_id'] = $userId;
            $data['club_id'] = $clubId;
            return ClubUserModel::create($data);
        }
    }

    public function deleteClubUserAttention($userId, $clubId)
    {
        return ClubUserModel::where('user_id', $userId)
            ->where('club_id', $clubId)
            ->delete();
    }
    public function checkClubUserAttention($userId, $clubId)
    {
        return ClubUserModel::where('user_id', $userId)
            ->where('club_id', $clubId)
            ->first();
    }
}