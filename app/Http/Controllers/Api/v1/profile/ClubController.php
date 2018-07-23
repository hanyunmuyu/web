<?php

namespace App\Http\Controllers\Api\v1\profile;

use App\Repositories\Api\v1\ClubRepository;
use App\Services\AttachmentService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClubController extends Controller
{
    //
    private $attachmentService;
    private $clubRepository;

    public function __construct(AttachmentService $attachmentService, ClubRepository $clubRepository)
    {
        $this->attachmentService = $attachmentService;
        $this->clubRepository = $clubRepository;
    }

    public function create(Request $request)
    {
        $name = $request->get('name');
        $category = $request->get('category');
        $user = auth('api')->user();
        if (!$name) {
            return $this->error('社团名称不可以为空');
        }
        if (!$category) {
            return $this->error('分类不可以为空');
        }
        $club = $this->clubRepository->getClubByName($name, $user->school_id);
        if ($club) {
            return $this->error('该社团已经存在');
        }
        $attachment = $this->attachmentService->addAttachment($request);
        $path = '';
        if ($attachment) {
            $path = $attachment[0]['attachment_path'];
        }
        $this->clubRepository->createClub($user->id, $user->school_id, $name, $path, $category);
        return $this->success();
    }
}
