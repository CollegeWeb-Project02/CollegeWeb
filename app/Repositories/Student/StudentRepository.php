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

    public function searchStudent($level = 1, $searchBy, $keyword, $perPage=12) {
        return $this->model
            ->where($searchBy,'like','%'. $keyword .'%')
            ->where('level', $level)
            ->orderBy('id','desc')
            ->paginate($perPage)
            ->appends(['search' => $keyword]);
    }
}
