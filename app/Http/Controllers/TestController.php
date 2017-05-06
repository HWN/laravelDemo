<?php

namespace App\Http\Controllers;

use App\Entities\TestMongo;
use App\Repositories\Criteria\ArticleTestCriteria;
use App\Repositories\HouseRepositoryInterface;
use App\Repositories\ArticleRepository as Article;
use App\User;
use Illuminate\Http\Request;
use Gate;

class TestController extends Controller
{
    //
    private $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function index(Request $request)
    {
        TestMongo::updateOrCreate(['name'=>123],['name'=>'哈哈哈']);
        $data = TestMongo::get();
        dd($data);
        //        dd(\Auth::user());
        //        return view('test');
        /*repositories*/
        //        $this->article->pushCriteria(new ArticleTestCriteria());
        //        $aa = $this->article->all();
        //        dd($aa->toArray());
        //        $user = User::findOrFail(50);
        //        \Log::info('Showing user profile for user:');
        /*gate*/
        //        $aa = Gate::allows('update', $request);
        //        if ($aa) {
        //            dump('进入成功' . $aa);
        //        } else {
        //            dump('没有权限');
        //        }
    }
}
