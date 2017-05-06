<?php
/**
 * Created by PhpStorm.
 * Name: HouseRepositoryInterface.php
 * 作者: 黄伟楠
 * 日期: 4/1 0001
 * 时间: 9:37
 * 功能:
 */

namespace App\Repositories;


interface HouseRepositoryInterface
{
    public function selectAll();

    public function find($id);
}