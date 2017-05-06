<?php
/**
 * Created by PhpStorm.
 * Name: AritcleRepository.php
 * 作者: 黄伟楠
 * 日期: 4/1 0001
 * 时间: 10:17
 * 功能:
 */

namespace App\Repositories;


use Bosnadev\Repositories\Eloquent\Repository;

class ArticleRepository extends Repository
{
    public function model()
    {
        return 'App\Article';
    }
}