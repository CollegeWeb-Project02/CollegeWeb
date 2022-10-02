<?php

namespace App\Services\Point;

use App\Services\ServiceInterface;

interface PointServiceInterface extends ServiceInterface
{
    public function getPoint();
}
