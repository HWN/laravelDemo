<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\ApiMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    use ApiMessage;

    public function index()
    {
        return view('article.index');
    }

    public function getList($page = 1)
    {
        $articles = Article::paginate(5);
        $msg['status'] = 200;
        $msg['data'] = $articles->items();
        $msg['pages'] = ($articles->total() % 5) == 0 ? $articles->total() / 5 : intval($articles->total() / 5) + 1;
        return $msg;
    }

    public function openFrom($id = null)
    {
        if (is_null($id)) {
            return view('article.add');
        } else {
            $article = Article::findOrFail($id);
            return view('article.edit', compact('article'));
        }
    }

    public function add(Request $request)
    {
        $input = $request->all();
        $res = Article::create($input);
        if (empty($res)) {
            return $this->apiError();
        } else {
            return $this->apiSuccess(200, '成功', '', url('user/index'));
        }
    }

    public function update(Request $request, $uid)
    {
        $article = Article::findOrFail($uid);
        $res = $article->update($request->all());
        if (empty($res)) {
            return $this->apiError();
        } else {
            return $this->apiSuccess(200, '成功', '', url('user/index'));
        }
    }

    public function del(Request $request)
    {
        //        $del = $request->all();
        //        if (!isset($del['uid'])) {
        //            return $this->apiJson(0, '参数错误');
        //        }
        //        $uids = explode(',', $del['uid']);
        //        $res = User::destroy($uids);
        //        if (empty($res)) {
        //            return $this->apiJson(0, '出错啦');
        //        } else {
        //            return $this->apiJson(200, '成功', '', url('user/index'));
        //        }
    }
}
