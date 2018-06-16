<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function edit()
    {
        return view('home.user.edit');
    }

    public function center()
    {
        return view('home.user.center');
    }

    public function auth()
    {
        return view('home.user.auth');
    }
}
