<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/31
 * Time: 15:45
 */

namespace App\Repositories\Api\v1;


use App\Models\UserMessageModel;

class UserMessageRepository
{
    public function getUserMessageList($userId)
    {
        return UserMessageModel::where('user_id', $userId)
            ->orderby('status', 'desc')
            ->orderby('id', 'desc')
            ->paginate(16);
    }
}