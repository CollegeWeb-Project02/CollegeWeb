<?php

namespace App\Repositories\Point;

use App\Models\Point;
use App\Repositories\BaseRepository;

class PointRepository extends BaseRepository implements PointRepositoryInterface
{
    public function getModel(){
        return Point::class;
    }

    public function getPoint(){
        return $this->model->get();
    }
}
