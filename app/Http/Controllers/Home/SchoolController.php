<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    //
    public function index()
    {
        return view('home.school.index');
    }
    public function list()
    {

    }
}
