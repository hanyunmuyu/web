<?php

namespace App\Http\Controllers\Home;

use App\Repositories\Home\ClubCategoryRepository;
use App\Repositories\Home\ClubRepository;
use App\Repositories\Home\SchoolRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    private $clubRepository;
    private $clubCategoryRepository;
    private $schoolRepository;
    public function __construct(
        ClubRepository $clubRepository,
        ClubCategoryRepository $clubCategoryRepository,
        SchoolRepository $schoolRepository
    )
    {
        $this->clubRepository = $clubRepository;
        $this->clubCategoryRepository = $clubCategoryRepository;
        $this->schoolRepository = $schoolRepository;
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
        $schoolList = $this->schoolRepository->getSchoolListRandom(5);
        $data['clubList'] = $cludList;
        $data['schoolList'] = $schoolList;
        return view('home.index.index', $data);
    }
}
