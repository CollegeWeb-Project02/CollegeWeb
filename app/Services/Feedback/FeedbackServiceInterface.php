<?php

namespace App\Services\Feedback;

use App\Services\ServiceInterface;

interface FeedbackServiceInterface extends ServiceInterface
{
    public function getFeedbacks($course_id);

}
