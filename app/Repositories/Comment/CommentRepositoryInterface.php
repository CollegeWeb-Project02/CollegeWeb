<?php

namespace App\Repositories\Comment;

use App\Repositories\RepositoryInterface;

interface CommentRepositoryInterface extends RepositoryInterface
{
    public function getComments($limit = 3);
}
