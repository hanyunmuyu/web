<?php

namespace App\Http\Controllers\Home;

use App\Repositories\Home\SchoolRepository;
use App\Repositories\Home\UserRepository;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    private $schoolRepository;
    private $userRepository;

    public function __construct(
        SchoolRepository $schoolRepository,
        UserRepository $userRepository
    )
    {
        $this->schoolRepository = $schoolRepository;
        $this->userRepository = $userRepository;
    }

    //
    public function edit()
    {
        return view('home.user.edit');
    }

    public function update(Request $request)
    {
        $nick_name = $request->get('nick_name');
        $gender = $request->get('gender');
        $school_id = $request->get('school');
        $user = Auth::user();
        $user = $this->userRepository->getUserById($user->id);
        $user->nick_name = $nick_name;
        $user->gender = $gender;
        if ($user->school_id == 0) {
            $user->school_id = $school_id ?? 0;
        }
        $user->save();
        return redirect('/user/center');
    }

    public function center()
    {
        $schoolList = $this->schoolRepository->getSchoolList();
        $data['schoolList'] = $schoolList;
        $data['school_id'] = Auth::user()->school_id;
        $user = Auth::user();
        $data['user'] = $user;
        if ($user->school_id > 0) {
            $data['school'] = $this->schoolRepository->getSchoolById($user->school_id);
        }
        return view('home.user.center', $data);
    }

    public function auth()
    {
        return view('home.user.auth');
    }
    public function student()
    {
        return view('home.user.student');
    }
}
