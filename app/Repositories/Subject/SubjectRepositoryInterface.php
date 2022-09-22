<?php

namespace App\Repositories\Subject;

use App\Repositories\RepositoryInterface;

interface SubjectRepositoryInterface extends RepositoryInterface
{
    public function getRelatedSubject($subject, $limit = 8);

    public function getLimitSubject($subject, $limit = 4);

    public function getFeaturedSubjectBySubject();
}
