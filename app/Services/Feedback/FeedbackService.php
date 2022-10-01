<?php

namespace App\Services\Feedback;

use App\Repositories\Feedback\FeedbackRepositoryInterface;
use App\Services\BaseService;

class FeedbackService extends BaseService implements FeedbackServiceInterface
{
    public $repository;

    public function __construct(FeedbackRepositoryInterface $FeedbackRepository)
    {
        $this->repository = $FeedbackRepository;
    }

    public function getFeedbacks($course_id){
        return $this->repository->getFeedbacks($course_id);
    }
}
