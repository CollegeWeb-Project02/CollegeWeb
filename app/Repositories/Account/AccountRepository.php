<?php

namespace App\Repositories\Account;

use App\Models\Account;
use App\Repositories\BaseRepository;

class AccountRepository extends BaseRepository implements AccountRepositoryInterface
{
    public function getModel(){
        return Account::class;
    }

    public function getAccountInDashboard(){
        return $this->model->get();
    }
}
