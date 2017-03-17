<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function getList()
    {
        $users = User::all();
        $msg['status'] = 200;
        $msg['data'] = $users;
        $msg['pages'] = 1;
        return $msg;
    }

    public function openFrom($uid = null)
    {
        //        $uid = \Request::all();

        if (is_null($uid)) {
            return view('user.add');
        } else {
            $user = User::findOrFail($uid);
            return view('user.edit', compact('user'));
        }
        //        return view()->file(resource_path('views/user/add.blade.php'));
    }

    public function update()
    {
        $data = \Request::all();
        $data['password'] = '123';
        $res = User::created($data);
        return $res;
    }
}
