<?php

namespace App\Repositories\Feedback;

use App\Repositories\RepositoryInterface;

interface FeedbackRepositoryInterface extends RepositoryInterface
{
    public function getFeedbacks($course_id);
}
