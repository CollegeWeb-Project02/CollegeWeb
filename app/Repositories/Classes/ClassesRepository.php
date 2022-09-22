<?php

namespace App\Repositories\Classes;

use App\Models\Classes;
use App\Repositories\BaseRepository;

class ClassesRepository extends BaseRepository implements ClassesRepositoryInterface
{
    public function getModel(){
        return Classes::class;
    }
}
