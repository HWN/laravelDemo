<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\UserRequest;
use App\User;
use App\Http\Controllers\Controller;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function getList(Request $request)
    {
        $name = $request->input('name');
        $user = new User();
        $map = [];
        if ($name != '') {
            $map[] = ['name', 'like', '%' . $name . '%'];
        }
        $users = $user->where($map)->orderBy('created_at', 'desc')->paginate(5);
        $msg['status'] = 200;
        $msg['data'] = $users->items();
        $msg['pages'] = ($users->total() % 5) == 0 ? $users->total() / 5 : intval($users->total() / 5) + 1;

        return $msg;
    }

    public function openFrom($uid = null)
    {
        if (is_null($uid)) {
            return view('user.add');
        } else {
            $user = User::findOrFail($uid);
            return view('user.edit', compact('user'));
        }
    }

    public function add(UserRequest $request)
    {
        try{
            $input = $request->all();
            $res = User::create($input);
            if (empty($res)) {
                return $this->apiJson(0, '出错啦1');
            } else {
                return $this->apiJson(200, '成功', '', url('user'));
            }
        }catch (ValidationException $e){
            return $this->apiJson(0, '出错啦2');
        }

    }

    public function update(UserRequest $request, $uid)
    {
        $user = User::findOrFail($uid);
        $res = $user->update($request->all());
        if (empty($res)) {
            return $this->apiJson(0, '出错啦');
        } else {
            return $this->apiJson(200, '成功', '', url('user'));
        }
    }

    public function del(Request $request)
    {
        $del = $request->all();
        if (!isset($del['uid'])) {
            return $this->apiJson(0, '参数错误');
        }
        $uids = explode(',', $del['uid']);
        $res = User::destroy($uids);
        if (empty($res)) {
            return $this->apiJson(0, '出错啦');
        } else {
            return $this->apiJson(200, '成功', '', url('user'));
        }
    }

    public function check(Request $request)
    {
        $check = $request->all();
        if (!isset($check['uid'])) {
            return $this->apiJson(0, '参数错误');
        }
        //        $uids = explode(',',$del['uid']);
        $user = User::findOrFail($check['uid']);
        $user->status = $user->status ? 0 : 1;
        $res = $user->save();
        //审核
        //        $res = User::destroy($uids);
        if (empty($res)) {
            return $this->apiJson(0, '出错啦');
        } else {
            return $this->apiJson(200, '成功');
        }
    }
}
