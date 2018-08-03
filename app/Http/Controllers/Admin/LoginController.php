<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('admin.login.index');
    }

    public function doLogin(Request $request)
    {
        $messages = [
            'name.required' => '用户名必须',
            'password.required' => '密码必须',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'password' => 'required|string',
        ], $messages);
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }
        $user = Admin::where('name', $request->get('name'))->first();
        if (!$user) {
            return redirect('/admin/login')
                ->withErrors(['name' => '用户不存在'])
                ->withInput();
        }
        if (!Hash::check($request->get('password'),$user->password)) {
            return redirect('/admin/login')
                ->withErrors(['password' => '密码错误'])
                ->withInput();
        }
        auth('admin')->login($user, false);
        return redirect('/admin/index');
    }
}
