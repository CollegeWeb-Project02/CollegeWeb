<?php

namespace App\Services\Student;

use App\Services\ServiceInterface;

interface StudentServiceInterface extends ServiceInterface
{
    public function getStudentInDashboard();

    public function searchStudent($level = 1, $searchBy, $keyword, $perPage=12);
}
