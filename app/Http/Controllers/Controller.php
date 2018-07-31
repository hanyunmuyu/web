<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function success($data = [], $msg = "成功！", $code = 200, $status = 'success'): array
    {
        return [
            'code' => $code,
            'status' => $status,
            'msg' => $msg,
            'data' => $this->delNull($data),
        ];
    }

    public function error($msg = "失败！", $code = 400, $status = 'error'): array
    {
        return [
            'code' => $code,
            'status' => $status,
            'msg' => $msg
        ];
    }

    private function delNull($arr)
    {
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                $arr[$key] = $this->delNull($value);
            } else {
                $arr[$key] = $value ?? '';
            }
        }
        return $arr;
    }

    public function formatPaginate($paginate): array
    {
        $tmp = [];
        if ($paginate) {
            $paginate = $paginate->toArray();
            $data = $paginate['data'];
            $tmp['totalPage'] = $paginate['last_page'];
            $tmp['currentPage'] = $paginate['current_page'];
            $tmp['data'] = [];
            foreach ($data as $key => $v) {
                $tmp['data'][$key] = $v;
            }
        } else {
            $tmp['totalPage'] = 1;
            $tmp['currentPage'] = 1;
            $tmp['data'] = [];
        }
        return $tmp;
    }
}
