<?php

namespace App\Repositories\Teacher;

use App\Models\Staff;
use App\Repositories\BaseRepository;

class TeacherRepository extends BaseRepository implements TeacherRepositoryInterface
{
    public function getModel(){
        return Staff::class;
    }

    public function getTeachers($limit = 3)
    {
        return $this->model->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    }
}
