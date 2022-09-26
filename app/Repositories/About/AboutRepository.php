<?php

namespace App\Repositories\About;

use App\Models\About;
use App\Repositories\BaseRepository;

class AboutRepository extends BaseRepository implements AboutRepositoryInterface
{
    public function getModel(){
        return About::class;
    }
}
