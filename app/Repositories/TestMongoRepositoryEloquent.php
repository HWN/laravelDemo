<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TestMongoRepository;
use App\Entities\TestMongo;
use App\Validators\TestMongoValidator;

/**
 * Class TestMongoRepositoryEloquent
 * @package namespace App\Repositories;
 */
class TestMongoRepositoryEloquent extends BaseRepository implements TestMongoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TestMongo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
