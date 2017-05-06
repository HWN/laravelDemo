<?php
/**
 * Created by PhpStorm.
 * Name: BaseRequest.php
 * 作者: 黄伟楠
 * 日期: 4/7 0007
 * 时间: 15:00
 * 功能:
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class BaseRequest extends FormRequest
{
    public function response(array $errors)
    {
        if ($this->expectsJson()) {
            $data['status'] = 0;
            $data['msg'] = '字段错误';
            $data['data'] = $errors;
            return new JsonResponse($data, 200);
        }
        parent::response();
    }
}