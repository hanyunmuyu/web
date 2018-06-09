<?php

namespace App\Http\Controllers\Home;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('home.register.index');
    }

    public function doRegister(Request $request)
    {
        $messages = [
            'name.required' => '用户名必须',
            'name.min' => '用户名至少为6位',
            'password.required' => '密码必须',
            'password.min' => '密码至少要6位',
            'password_confirmation.required' => '确认密码至少要6位',
            'password_confirmation.min' => '确认密码至少要6位',
            'password_confirmation.confirmed' => '两次密码不一致',
        ];
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:6|max:255',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
        ], $messages);
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }
        $user = User::where('name', $request->get('name'))->first();
        if ($user) {
            return redirect('/register')
                ->withErrors(['name' => '用户已经存在'])
                ->withInput();
        }
        $user = User::create([
            'name' => $request->get('name'),
            'password' => Hash::make($request->get('password')),
        ]);
        Auth::login($user);
        return redirect('/');
    }
}
