<?php

namespace App\Repositories;

abstract class BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    abstract public function getModel();

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update(array $data,$id)
    {
        $object = $this->model->find($id);

        return $object->update($data);
    }

    public function delete($id)
    {
        $object = $this->model->find($id);

        return $object->delete();
    }

    public function search($searchBy, $keyword, $perPage=12) {
        return $this->model
            ->where($searchBy,'like','%'. $keyword .'%')
            ->orderBy('id','desc')
            ->paginate($perPage)
            ->appends(['search' => $keyword]);
    }

}
