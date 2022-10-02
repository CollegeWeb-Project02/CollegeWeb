<?php

namespace App\Services\Point;

use App\Repositories\Point\PointRepositoryInterface;
use App\Services\BaseService;

class PointService extends BaseService implements PointServiceInterface
{
    public $repository;

    public function __construct(PointRepositoryInterface $pointRepository)
    {
        $this->repository = $pointRepository;
    }

    public function getPoint(){
        return $this->repository->getPoint();
    }
}
