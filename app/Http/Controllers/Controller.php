<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param int    $status
     * @param string $msg
     * @param string $data
     * @param string $url
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiJson($status, $msg = '', $data = '', $url = '')
    {
        return response()->json(['status' => $status, 'msg' => $msg, 'data' => $data, 'url' => $url]);
    }
}
