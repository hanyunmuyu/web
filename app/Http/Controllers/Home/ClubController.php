<?php

namespace App\Http\Controllers\Home;

use App\Models\ClubModel;
use App\Repositories\Home\ClubCategoryRepository;
use App\Repositories\Home\ClubRepository;
use App\Repositories\Home\ClubUserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClubController extends Controller
{
    private $clubCategoryRepository;
    private $clubRepository;
    private $clubUserRepository;

    public function __construct(
        ClubCategoryRepository $clubCategoryRepository,
        ClubRepository $clubRepository,
        ClubUserRepository $clubUserRepository
    )
    {
        $this->clubCategoryRepository = $clubCategoryRepository;
        $this->clubRepository = $clubRepository;
        $this->clubUserRepository = $clubUserRepository;
    }

    //
    public function index()
    {
        return view('home.club.index');
    }

    /**社团详情
     * @param Request $request
     */
    public function detail(Request $request)
    {
        $request->get('id');
        return view('home.club.detail');
    }

    /**
     * 社团列表
     */
    public function list(Request $request)
    {
        $id = $request->get('id');
        $user = Auth::user();
        $clubList = $this->clubRepository->getClubList($id);
        $categories = $this->clubCategoryRepository->getClubCategories();
        $data['categories'] = $categories;
        $data['clubList'] = $clubList;
        if (Auth::check()) {
            $myClubNumber = $this->clubUserRepository->getMyClubNumber($user->id);
            $clubMyManage = $this->clubRepository->getClubMyManage($user->id);
            $data['myClubNumber'] = $myClubNumber;
            $data['clubMyManage'] = $clubMyManage;
        } else {
            $clubs = $this->clubRepository->getClubRandom();
            $data['clubs'] = $clubs;
        }
        return view('home.club.list', $data);
    }

    public function add()
    {
        $categories = $this->clubCategoryRepository->getClubCategories();
        return view('home.club.add', ['categories' => $categories]);
    }

    public function save(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $messages = [
            'club_name.required' => '社团名称不可以为空',
            'club_description.required' => '描述不可以为空'
        ];
        $validator = Validator::make($request->all(), [
            'club_name' => 'required|string',
            'club_description' => 'required|string'
        ], $messages);
        if ($validator->fails()) {
            return redirect('/club/add')
                ->withErrors($validator)
                ->withInput();
        }

        $club = ClubModel::where('club_name', trim($request->get('club_name')))
            ->where('create_user_id', Auth::user()->id)
            ->first();
        if ($club) {
            return redirect('/club/add')
                ->withErrors(['club_name' => '社团已经存在'])
                ->withInput();
        }
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $uploads = "/uploads/logo/"; //2、定义图片上传路径
            $imagesName = $logo->getClientOriginalName(); //3、获取上传图片的文件名
            $extension = $logo->getClientOriginalExtension(); //4、获取上传图片的后缀名
            $newImagesName = md5(time()) . random_int(5, 5) . "." . $extension;//5、重新命名上传文件名字
            $logo->move($_SERVER['DOCUMENT_ROOT'] . $uploads, $newImagesName); //6、使用move方法移动文件.
            $club_logo = $uploads . $newImagesName;
        }
        $data['school_id'] = Auth::user()->school_id;
        $data['create_user_id'] = Auth::user()->id;
        $data['club_name'] = $request->get('club_name');
        $data['club_logo'] = $club_logo;
        $data['club_description'] = $request->get('club_description');
        $data['category_ids'] = join(',', $request->get('category'));
        $this->clubRepository->addClub($data);
        return redirect('/club');
    }

    public function attention(Request $request)
    {
        $id = $request->get('id');
        $status = $request->get('status');
        if (!Auth::check()) {
            return ['code' => 0, 'status' => 'failed', 'msg' => '请先登录'];
        }
        $auth = Auth::user();
        $clubUser = $this->clubUserRepository->getClubUser($id, $auth->id);
        if ($clubUser) {
            if ($clubUser->status >= 1 && $status == 1) {
                return ['code' => 0, 'status' => 'error', 'msg' => '已经关注'];
            } elseif ($clubUser->status >= 2 && $status == 2) {
                return ['code' => 0, 'status' => 'error', 'msg' => '已经申请加入'];
            } elseif ($clubUser->status == 3) {
                return ['code' => 0, 'status' => 'error', 'msg' => '已经加入'];
            }
        }
        $res = $this->clubUserRepository->payAttention($id, $auth->id, $status);
        if ($res) {
            if ($status == 1) {
                return ['code' => 1, 'status' => 'ok', 'msg' => '关注成功'];
            } elseif ($status == 2) {
                return ['code' => 1, 'status' => 'ok', 'msg' => '申请加入成功'];
            }
        }
        return ['code' => 0, 'status' => 'error', 'msg' => '失败'];
    }

    public function news()
    {
        return view('home.club.news');
    }
}
