<?php

namespace App\Http\Controllers\Api\v1;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function doLogin(Request $request)
    {
        $name = $request->get('name');
        $password = $request->get('password');
        if (!$name) {
            return $this->error('用户名不可以为空！');
        }
        $user = User::where('name', $name)->first();
        if (!$user) {
            return $this->error('该用户不存在！');
        }
        if (!$password) {
            return $this->error('密码不可以为空！');
        }
        if (Hash::check($name, $user->password)) {
            return $this->error('用户名或者密码错误！');
        }
        $token = Hash::make(str_random());
        $user->api_token = $token;
        $user->save();
        $user = $user->toArray();
        $user['api_token'] = $token;
        $user['avatar'] = config('constant.app_domain') . $user['avatar'];
        return $this->success($user);
    }
}
