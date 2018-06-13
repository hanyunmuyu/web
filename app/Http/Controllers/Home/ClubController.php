<?php

namespace App\Http\Controllers\Home;

use App\Repositories\Home\ClubCategoryRepository;
use App\Repositories\Home\ClubRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $data['school_id'] = Auth::user()->school_id;
        $data['create_user_id'] = Auth::user()->id;
        $data['club_name'] = $request->get('club_name');
        $data['club_description'] = $request->get('club_description');
        $data['category_ids'] =join(',', $request->get('catagory'));
        $this->clubRepository->addClub($data);
    }
}
