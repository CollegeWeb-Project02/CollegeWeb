<?php

namespace App\Services\Comment;

use App\Services\ServiceInterface;

interface CommentServiceInterface extends ServiceInterface
{
    public function getComments($limit = 3);

}
