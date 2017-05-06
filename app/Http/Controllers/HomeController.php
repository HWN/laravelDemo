<?php

namespace App\Http\Controllers;

use Gate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function test($id)
    {
        $aa = Gate::denies('test', 123);
        if ($aa) {
            dump('没有权限');
        } else {
            dump('进入成功' . $aa);
        }
    }
}
