<?php

namespace App\Http\Controllers\Api\v1\profile;

use App\Repositories\Api\v1\UserMessageRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    private $userMessageRepository;

    public function __construct(UserMessageRepository $userMessageRepository)
    {
        $this->userMessageRepository = $userMessageRepository;
    }

    public function index(Request $request)
    {
        $user = auth('api')->user();
        $userMessageList = $this->formatPaginate($this->userMessageRepository->getUserMessageList($user->id));
        return $this->success($userMessageList);
    }
}
