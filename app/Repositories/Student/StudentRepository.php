<?php

namespace App\Repositories\Student;

use App\Models\User;
use App\Repositories\BaseRepository;

class StudentRepository extends BaseRepository implements StudentRepositoryInterface
{
    public function getModel(){
        return User::class;
    }

    public function getStudentInDashboard($level = 1){
        return $this->model->where('level', $level)->orderBy('id', 'desc')->get();
    }
}
