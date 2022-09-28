<?php

namespace App\Services\Account;

use App\Repositories\Account\AccountRepositoryInterface;
use App\Services\BaseService;

class AccountService extends BaseService implements AccountServiceInterface
{
    public $repository;

    public function __construct(AccountRepositoryInterface $accountRepository)
    {
        $this->repository = $accountRepository;
    }

    public function getAccountInDashboard(){
        return $this->repository->getAccountInDashboard();
    }
}
