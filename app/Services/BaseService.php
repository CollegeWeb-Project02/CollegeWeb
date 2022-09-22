<?php

namespace App\Services;

class BaseService implements ServiceInterface
{

    public $repository;

    public function all()
    {
        return $this->repository->all();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }
}
