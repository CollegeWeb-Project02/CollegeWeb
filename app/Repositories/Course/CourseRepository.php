<?php

namespace App\Repositories\Course;

use App\Models\Course;
use App\Repositories\BaseRepository;

class CourseRepository extends BaseRepository implements CourseRepositoryInterface
{
    public function getModel()
    {
        return Course::class;
    }
    public function getRelatedCourse($course, $limit = 8){
        return $this->model->where('course_id', $course->course_id)
            ->where('course_name', $course->name)
            ->limit($limit)
            ->get();
    }

    public function getFeaturedCourseByCourse(){
        return $this->model->where('status', true)
            ->get();
    }
}
