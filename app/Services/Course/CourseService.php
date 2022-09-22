<?php

namespace App\Services\Course;

use App\Repositories\Course\CourseRepositoryInterface;
use App\Services\BaseService;

class CourseService extends BaseService implements CourseServiceInterface
{
    public $repository;

    public function __construct(CourseRepositoryInterface $courseRepository)
    {
        $this->repository = $courseRepository;
    }

    public function find($id){
        $course = $this->repository->find($id);

        return $course;
    }

    public function getRelatedCourse($course, $limit = 6)
    {
        return $this->repository->getRelatedCourse($course, $limit);
    }

    public function getLimitCourse($course, $limit = 4)
    {
        return $this->repository->getLimitCourse($course, $limit);
    }

    public function getFeaturedCourse(){
        return  $this->repository->getFeaturedCourseByCourse();
    }
}
