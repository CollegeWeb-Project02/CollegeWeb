<?php

namespace App\Services\Classes;

use App\Repositories\Classes\ClassesRepositoryInterface;
use App\Services\BaseService;

class ClassesService extends BaseService implements ClassesServiceInterface
{
    public $repository;

    public function __construct(ClassesRepositoryInterface $classesRepository)
    {
        $this->repository = $classesRepository;
    }
}
