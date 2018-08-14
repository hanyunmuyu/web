<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Admin\SchoolRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    private $schoolRepository;

    public function __construct(SchoolRepository $schoolRepository)
    {
        $this->schoolRepository = $schoolRepository;
    }

    //
    public function index()
    {
        $schoolList = $this->schoolRepository->getSchoolList();
        return view('admin.school.index', ['schoolList' => $schoolList]);
    }
}
