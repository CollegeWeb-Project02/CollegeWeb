<?php

namespace App\Services;

class BaseService implements ServiceInterface
{

    public $repository;

    public function all()
    {
        return $this->repository->all();
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function update(array $data,$id)
    {
        return $this->repository->update($data,$id);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }

    public function search($searchBy, $keyword, $perPage = 12) {
        return $this->repository->search($searchBy, $keyword, $perPage);
    }
}
