<?php

namespace App\Http\Controllers\Home;

use App\Models\ClubModel;
use App\Repositories\Home\ClubCategoryRepository;
use App\Repositories\Home\ClubRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClubController extends Controller
{
    private $clubCategoryRepository;
    private $clubRepository;

    public function __construct(
        ClubCategoryRepository $clubCategoryRepository,
        ClubRepository $clubRepository
    )
    {
        $this->clubCategoryRepository = $clubCategoryRepository;
        $this->clubRepository = $clubRepository;
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
    public function list()
    {
        return view('home.club.list');
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

        $club = ClubModel::where('club_name', trim($request->get('club_name')))->first();
        if ($club) {
            return redirect('/club/add')
                ->withErrors(['club_name' => '社团已经存在'])
                ->withInput();
        }
        $data['school_id'] = Auth::user()->school_id;
        $data['create_user_id'] = Auth::user()->id;
        $data['club_name'] = $request->get('club_name');
        $data['club_description'] = $request->get('club_description');
        $data['category_ids'] = join(',', $request->get('category'));
        $this->clubRepository->addClub($data);
        return redirect('/club');
    }
}
