<?php

namespace App\Repositories\Student;

use App\Repositories\RepositoryInterface;

interface StudentRepositoryInterface extends RepositoryInterface
{
    public function getStudentInDashboard();

    public function update(array $data, $id);
}
