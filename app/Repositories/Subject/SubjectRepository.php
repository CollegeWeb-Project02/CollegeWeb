<?php

namespace App\Repositories\Subject;

use App\Models\Subject;
use App\Repositories\BaseRepository;

class SubjectRepository extends BaseRepository implements SubjectRepositoryInterface
{
    public function getModel()
    {
        return Subject::class;
    }
    public function getRelatedSubject($subject, $limit = 8){
        return $this->model->where('subject_id', $subject->id)
            ->limit($limit)
            ->get();
    }

    public function getLimitSubject($subject, $limit = 4){
        return $this->model
            ->limit($limit)
            ->get();
    }

    public function getFeaturedSubjectBySubject(){
        return $this->model
            ->get();
    }

}
