<?php

namespace App\Repositories\Teacher;

use App\Models\User;
use App\Repositories\BaseRepository;

class TeacherRepository extends BaseRepository implements TeacherRepositoryInterface
{
    public function getModel(){
        return User::class;
    }

    public function getTeachers($limit = 4, $level = 2)
    {
        return $this->model->where('level', $level)
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    }

    public function getTeacherInDashboard($level = 2){
        return $this->model->where('level', $level)->orderBy('id', 'desc')->get();
    }
}
