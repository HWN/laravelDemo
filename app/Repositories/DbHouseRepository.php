<?php
/**
 * Created by PhpStorm.
 * Name: DbHouseRepository.php
 * 作者: 黄伟楠
 * 日期: 4/1 0001
 * 时间: 9:38
 * 功能:
 */

namespace App\Repositories;

use App\Article as Article;

class DbHouseRepository implements HouseRepositoryInterface
{
    public function selectAll(){
        return Article::all();
    }

    public function find($id){
        return Article::findOrFail($id);
    }
}