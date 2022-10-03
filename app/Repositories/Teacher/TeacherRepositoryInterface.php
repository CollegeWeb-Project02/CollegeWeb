<?php

namespace App\Repositories\Teacher;

use App\Repositories\RepositoryInterface;

interface TeacherRepositoryInterface extends RepositoryInterface
{
    public function getTeachers($limit = 4);
    public function getTeacherInDashboard();

    public function update(array $data, $id);

    public function searchTeachers($level=2, $searchBy, $keyword, $perPage=12);

}
