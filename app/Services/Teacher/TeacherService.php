<?php

namespace App\Services\Teacher;

use App\Repositories\Teacher\TeacherRepositoryInterface;
use App\Services\BaseService;

class TeacherService extends BaseService implements TeacherServiceInterface
{
    public $repository;

    public function __construct(TeacherRepositoryInterface $teacherRepository)
    {
        $this->repository = $teacherRepository;
    }

    public function getTeachers($limit = 4){
        return $this->repository->getTeachers($limit);
    }

    public function getTeacherInDashboard(){
        return $this->repository->getTeacherInDashboard();
    }

    public function searchTeachers($level = 2, $searchBy, $keyword, $perPage=12){
        return $this->repository->searchTeachers($level = 2, $searchBy, $keyword, $perPage=12);
    }
}
