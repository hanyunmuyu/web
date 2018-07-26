<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/26
 * Time: 10:46
 */

namespace App\Services;


use App\User;

class UserService
{
    public function doRegister($name, $password, $gender = 3, $schoolId = 0)
    {
        $data = [];
        $data['name'] = $name;
        $data['password'] = $password;
        $data['school_id'] = $schoolId;
        $data['gender'] = $gender;
        return User::create($data);
    }

    public function getUserByName($name)
    {
        return User::where('name', $name)->first();
    }
}