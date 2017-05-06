<?php

namespace App\Repositories\Criteria;

use Bosnadev\Repositories\Criteria\Criteria;
use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;

class ArticleTestCriteria extends Criteria
{
    public function apply($model, Repository $repository)
    {
        $model = $model->where('id','=','30');
        return $model;
    }
}