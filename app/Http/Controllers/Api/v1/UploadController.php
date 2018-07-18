<?php

namespace App\Http\Controllers\Api\v1;

use App\Services\AttachmentService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    private $attachmentService;

    public function __construct(AttachmentService $attachmentService)
    {
        $this->attachmentService = $attachmentService;
    }

    //
    public function index(Request $request)
    {
        $attachments = $this->attachmentService->addAttachment($request);
        return $this->success($attachments);
    }
}
