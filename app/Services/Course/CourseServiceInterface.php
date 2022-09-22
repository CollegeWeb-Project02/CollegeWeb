<?php

namespace App\Services\Course;

use App\Services\ServiceInterface;

interface CourseServiceInterface extends ServiceInterface
{
    public function getRelatedCourse($course, $limit = 6);

    public function getLimitCourse($course, $limit = 4);

    public function getFeaturedCourse();
}
