<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Admin\SchoolRepository;
use App\Services\AttachmentService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    private $schoolRepository;
    private $attachmentService;

    public function __construct(SchoolRepository $schoolRepository, AttachmentService $attachmentService)
    {
        $this->schoolRepository = $schoolRepository;
        $this->attachmentService = $attachmentService;
    }

    //
    public function index()
    {
        $schoolList = $this->schoolRepository->getSchoolList();
        return view('admin.school.index', ['schoolList' => $schoolList]);
    }

    public function add()
    {
        return view('admin.school.add');
    }

    /**创建高校
     */
    public function create(Request $request)
    {
        $attachment = $this->attachmentService->addAttachment($request);
        $data['school_logo'] = $attachment[0]['attachment_path'];
        $data['school_name'] = $request->get('school_name');
        $data['school_description'] = $request->get('school_description');
        $this->schoolRepository->createSchool($data);
        return redirect('/admin/school/index');
    }

    public function getSchoolByName(Request $request)
    {
        $schoolName = $request->get('schoolName');
        $school = $this->schoolRepository->getSchoolByName($schoolName);
        if ($school) {
            return $this->error('该高校已经存在');
        }
        return $this->success();
    }

    /**
     * 新闻列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function news()
    {
        $schoolNewsList = $this->schoolRepository->getSchoolNewsList();
        return view('admin.school.news', ['schoolNewsList' => $schoolNewsList]);
    }

    /**
     * 编辑新闻
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editNews(Request $request)
    {
        $news = $this->schoolRepository->getSchoolNewsById($request->id);
        if (!$news) {
            abort(404);
        }
        return view('admin.school.editNews', ['news' => $news]);
    }

    public function updateNews(Request $request)
    {
        $id = $request->get('id');
        $title = $request->get('title');
        $content = $request->get('content');
        $status = $request->get('status');
        $data['title'] = $title;
        $data['content'] = $content;
        $data['status'] = $status == 'on' ? 1 : 0;
        $this->schoolRepository->updateSchoolNews($id, $data);
        return $this->success();
    }

    /**
     * 删除新闻
     * @param Request $request
     * @return array
     */
    public function deleteNews(Request $request)
    {
        $newsId = $request->get('newsId');
        $this->schoolRepository->deleteSchoolNews($newsId);
        return $this->success();
    }
}
