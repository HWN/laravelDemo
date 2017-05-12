<?php

namespace App\Http;

/**
 * Created by PhpStorm.
 * Name: ApiMessage.php
 * 作者: 黄伟楠
 * 日期: 5/9 0009
 * 时间: 14:09
 * 功能:
 */
trait ApiMessage
{
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

    /**
     * @param        $status
     * @param string $msg
     * @param string $data
     * @param string $url
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiSuccess($status = 200, $msg = '成功', $data = '', $url = '')
    {
        return $this->apiJson($status, $msg, $data, $url);
    }

    public function apiError($status = 0, $msg = '出错', $data = '', $url = '')
    {
        
    }
}