<?php

namespace App\Repositories\Register;

use App\Models\Register;
use App\Repositories\BaseRepository;

class RegisterRepository extends BaseRepository implements RegisterRepositoryInterface
{
    public function getModel(){
        return Register::class;
    }
}
