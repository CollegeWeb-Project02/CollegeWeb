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

    public function getRelatedCourse($course, $limit = 8)
    {
        return $this->repository->getRelatedCourse($course, $limit);
    }

    public function getFeaturedCourse(){
        return  $this->repository->getFeaturedCourseByCourse();
    }
}
