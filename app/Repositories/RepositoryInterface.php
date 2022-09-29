<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);

    public function delete($id);

    public function update(array $data, $id);

}
