<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 2018/6/17
 * Time: 13:35
 */

namespace App\Repositories\Home;


use App\User;

class UserRepository
{
    public function getUserByPhone($phone)
    {
        return User::where('phone', $phone)->first();
    }

    public function getUserById($uid)
    {
        return User::where('id', $uid)->first();
    }
}