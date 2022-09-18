<?php

namespace App\Repositories\Course;

use App\Repositories\RepositoryInterface;

interface CourseRepositoryInterface extends RepositoryInterface
{
    public function getRelatedCourse($course, $limit = 8);

    public function getFeaturedCourseByCourse();
}
