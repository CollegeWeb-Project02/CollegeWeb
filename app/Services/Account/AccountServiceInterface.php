<?php

namespace App\Services\Account;

use App\Services\ServiceInterface;

interface AccountServiceInterface extends ServiceInterface
{
    public function getAccountInDashboard();
}
