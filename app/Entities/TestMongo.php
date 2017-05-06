<?php

namespace App\Entities;

use Jenssegers\Mongodb\Eloquent\Model as Mongo;

class TestMongo extends Mongo
{
    protected $connection = 'mongodb';

    protected $table = 'test';

    protected $fillable = ['name'];

}
