<?php

namespace App\Services\Subject;

use App\Services\ServiceInterface;

interface SubjectServiceInterface extends ServiceInterface
{
    public function getRelatedSubject($course, $limit = 8);

    public function getLimitSubject($course, $limit = 4);

    public function getFeaturedSubject();
}
