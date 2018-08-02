<?php

namespace App\Http\Controllers\Api\v1;

use App\Services\UserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    //
    public function doRegister(Request $request)
    {
        $name = $request->get('name');
        $password = $request->get('password');
        $gender = $request->get('gender');
        $schoolId = $request->get('schoolId', 0);
        if (!$name) {
            return $this->error('用户名不可以为空');
        }
        if (!$password) {
            return $this->error('密码不可以为空');
        }
        if (!$gender) {
            return $this->error('请选择性别');
        }
        if ($this->userService->getUserByName($name)) {
            return $this->error('该用户已经存在，换个昵称试试');
        }
        $password = Hash::make($password);
        $this->userService->doRegister($name, $password, $gender,$schoolId);
        return $this->success();
    }
}
