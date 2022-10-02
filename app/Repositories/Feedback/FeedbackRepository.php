<?php

namespace App\Repositories\Feedback;

use App\Models\Feedback;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class FeedbackRepository extends BaseRepository implements FeedbackRepositoryInterface
{
    public function getModel(){
        return Feedback::class;
    }

    public function getFeedbacks($course_id)
    {
        return DB::table('feedback')->where('course_id', $course_id)->get();
    }
}
