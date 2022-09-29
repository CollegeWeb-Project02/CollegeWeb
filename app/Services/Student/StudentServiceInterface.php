<?php

namespace App\Services\Student;

use App\Services\ServiceInterface;

interface StudentServiceInterface extends ServiceInterface
{
    public function getStudentInDashboard();
}
