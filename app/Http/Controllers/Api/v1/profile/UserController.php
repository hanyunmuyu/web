<?php

namespace App\Http\Controllers\Api\v1\profile;

use App\Services\AttachmentService;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    private $attachmentService;

    public function __construct(AttachmentService $attachmentService)
    {
        $this->attachmentService = $attachmentService;
    }

    //
    public function index(Request $request)
    {
        $user = $request->user('api');
        $user = $user->toArray();
        $user['avatar'] = config('constant.app_domain') . $user['avatar'];
        return $this->success($user);
    }

    public function updateAvatar(Request $request)
    {
        $user = $request->user('api');
        $attachment = $this->attachmentService->addAttachment($request);

//        $user->avatar = $attachment[0]['attachment_path'];


        $token = $user->api_token;
        $user = User::where('api_token', $token)->first();
        $user->avatar = $attachment[0]['attachment_path'];
        $user->save();
        return $this->success();
    }
}
