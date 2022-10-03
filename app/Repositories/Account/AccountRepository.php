<?php

namespace App\Repositories\Account;

use App\Models\User;
use App\Repositories\BaseRepository;

class AccountRepository extends BaseRepository implements AccountRepositoryInterface
{
    public function getModel(){
        return User::class;
    }

    public function getAccountInDashboard(){
        return $this->model->get();
    }
}
