<?php

namespace App\Services\Subject;

use App\Repositories\Subject\SubjectRepositoryInterface;
use App\Services\BaseService;

class SubjectService extends BaseService implements SubjectServiceInterface
{
    public $repository;

    public function __construct(SubjectRepositoryInterface $subjectRepository)
    {
        $this->repository = $subjectRepository;
    }

    public function getRelatedSubject($subject, $limit = 8)
    {
        return $this->repository->getRelatedSubject($subject, $limit);
    }

    public function getLimitSubject($subject, $limit = 4)
    {
        return $this->repository->getLimitSubject($subject, $limit);
    }

    public function getFeaturedSubject(){
        return  $this->repository->getFeaturedSubjectBySubject();
    }
}
