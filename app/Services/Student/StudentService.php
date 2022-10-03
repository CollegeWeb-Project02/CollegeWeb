<?php

namespace App\Services\Student;

use App\Repositories\Student\StudentRepositoryInterface;
use App\Services\BaseService;

class StudentService extends BaseService implements StudentServiceInterface
{
    public $repository;

    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->repository = $studentRepository;
    }

    public function getStudents($limit = 4){
        return $this->repository->getStudents($limit);
    }

    public function getStudentInDashboard(){
        return $this->repository->getStudentInDashboard();
    }

    public function searchStudent($level = 1, $searchBy, $keyword, $perPage=12){
        return $this->repository->searchStudent($level = 1, $searchBy, $keyword, $perPage=12);
    }
}
