<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Admin\ClubRepository;
use App\Services\ClubService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class ClubController extends Controller
{
    private $clubRepository;
    private $clubService;

    public function __construct(ClubRepository $clubRepository, ClubService $clubService)
    {
        $this->clubRepository = $clubRepository;
        $this->clubService = $clubService;
    }

    //
    public function index()
    {
        $clubList = $this->clubRepository->getClubList();
        foreach ($clubList as $key => $value) {
            $category = $this->clubService->getClubCategory(explode(',', $value->category_ids));
            $category = array_map(function ($v) {
                return $v['category_name'];
            }, $category->toArray());

            $category = join(',', $category);
            $clubList[$key]->category = $category;
        }
        return view('admin.club.index', ['clubList' => $clubList]);
    }

    /**
     * 处理社团申请
     * @param Request $request
     * @return array
     */
    public function deal(Request $request)
    {
        $id = $request->get('id');
        $status = $request->get('status');
        $this->clubRepository->dealClub($id, $status);
        return $this->success();
    }
}
