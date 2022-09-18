<?php

namespace App\Repositories\Comment;

use App\Models\Comment;
use App\Repositories\BaseRepository;

class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{
    public function getModel(){
        return Comment::class;
    }

    public function getComments($limit = 3)
    {
        return $this->model->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    }
}
