<?php

namespace App\Http\Controllers\Home;

use App\Repositories\Home\SchoolRepository;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $schoolRepository;

    public function __construct(SchoolRepository $schoolRepository)
    {
        $this->schoolRepository = $schoolRepository;
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
        $phone = $request->get('phone');
        $user = User::where('id', Auth::user()->id)->first();
        $user->nick_name = $nick_name;
        $user->gender = $gender;
        if ($user->school_id == 0) {
            $user->school_id = $school_id ?? 0;
        }
        if (!$user->phone) {
            $user->phone = $phone;
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
}
