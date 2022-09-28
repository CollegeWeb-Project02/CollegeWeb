<?php

namespace App\Repositories\Course;

use App\Repositories\RepositoryInterface;

interface CourseRepositoryInterface extends RepositoryInterface
{
    public function getRelatedCourse($course, $limit = 6);

    public function getLimitCourse($course, $limit = 6);
    public function getCourseInDashboard();

    public function getFeaturedCourseByCourse();
    public function getCourseBySubject($subjectId, $request);
}
