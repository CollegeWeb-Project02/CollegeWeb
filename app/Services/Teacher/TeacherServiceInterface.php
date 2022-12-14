<?php

namespace App\Services\Teacher;

use App\Services\ServiceInterface;

interface TeacherServiceInterface extends ServiceInterface
{
    public function getTeachers($limit = 4);

    public function getTeacherInDashboard();

    public function searchTeachers($level = 2, $searchBy, $keyword, $perPage=12);
}
