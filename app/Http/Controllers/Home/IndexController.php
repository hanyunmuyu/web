<?php

namespace App\Http\Controllers\Home;

use App\Repositories\Home\ClubCategoryRepository;
use App\Repositories\Home\ClubRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    private $clubRepository;
    private $clubCategoryRepository;

    public function __construct(
        ClubRepository $clubRepository,
        ClubCategoryRepository $clubCategoryRepository
    )
    {
        $this->clubRepository = $clubRepository;
        $this->clubCategoryRepository = $clubCategoryRepository;
    }

    //
    public function index()
    {
        $categories = $this->clubCategoryRepository->getClubCategories();
        $data['categories'] = $categories;
        $cludList = [];
        foreach ($categories as $category) {
            $cludList[] = $this->clubRepository->getClubListRandom($category->id, 5);
        }
        $data['clubList'] = $cludList;
        return view('home.index.index', $data);
    }
}
