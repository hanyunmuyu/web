<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClubController extends Controller
{
    //
    public function index()
    {

    }
    public function add()
    {
        return view('home.club.add');
    }
}
