<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClubController extends Controller
{
    //
    public function index()
    {
        return view('home.club.index');
    }

    public function list()
    {

    }
    public function add()
    {
        return view('home.club.add');
    }
}
