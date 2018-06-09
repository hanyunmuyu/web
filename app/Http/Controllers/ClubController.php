<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    //
    public function index()
    {

    }
    public function add()
    {
        return view('club.add');
    }
}
