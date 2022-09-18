<?php

namespace App\Services\Course;

use App\Services\ServiceInterface;

interface CourseServiceInterface extends ServiceInterface
{
    public function getRelatedCourse($course, $limit = 8);

    public function getFeaturedCourse();
}
