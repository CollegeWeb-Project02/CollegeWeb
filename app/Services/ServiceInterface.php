<?php

namespace App\Services;

interface ServiceInterface
{
    public function all();
    public function find($id);
    public function create(array $data);

    public function delete($id);

    public function update(array $data, $id);

}
