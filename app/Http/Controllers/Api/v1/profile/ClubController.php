<?php

namespace App\Http\Controllers\Api\v1\profile;

use App\Repositories\Api\v1\ClubRepository;
use App\Services\AttachmentService;
use App\Services\ClubService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClubController extends Controller
{
    //
    private $attachmentService;
    private $clubRepository;
    private $clubService;

    public function __construct(AttachmentService $attachmentService, ClubRepository $clubRepository, ClubService $clubService)
    {
        $this->attachmentService = $attachmentService;
        $this->clubRepository = $clubRepository;
        $this->clubService = $clubService;
    }

    public function create(Request $request)
    {
        $name = $request->get('name');
        $category = $request->get('category');
        $category = trim($category, ',');
        $clubDescription = $request->get('clubDescription');
        $user = auth('api')->user();
        if (!$name) {
            return $this->error('社团名称不可以为空');
        }
        if (!$clubDescription) {
            return $this->error('社团描述不可以为空');
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
        $this->clubRepository->createClub($user->id, $user->school_id, $name, $path, $clubDescription, $category);
        return $this->success();
    }

    public function payAttention(Request $request)
    {
        $user = auth('api')->user();
        $clubId = $request->get('clubId');
        if (!$clubId) {
            return $this->error('clubId不可以为空！');
        }
        $res = $this->clubService->payClubAttention($user->id, $clubId);
        if ($res) {
//            $isAttented=$this->clubService->checkClubUserAttention($user->id, $clubId);
            return $this->success();
        } else {
            return $this->error('关注失败，请稍后重试！');
        }
    }
}
