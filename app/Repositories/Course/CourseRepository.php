<?php

namespace App\Repositories\Course;

use App\Models\Course;
use App\Models\Subject;
use App\Repositories\BaseRepository;

class CourseRepository extends BaseRepository implements CourseRepositoryInterface
{
    public function getModel()
    {
        return Course::class;
    }
    public function getRelatedCourse($course, $limit = 6){
        return $this->model
            ->limit($limit)
            ->get();
    }

    public function getLimitCourse($course, $limit = 4){
        return $this->model
            ->limit($limit)
            ->get();
    }

    public function getFeaturedCourseByCourse(){
        return $this->model->where('status', true)
            ->get();
    }

    public function getCourseBySubject($subjectId, $request){
//        $courses = Subject::find($subjectId)->courses->toQuery();

//        return $courses;
    }
}
