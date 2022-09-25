<?php

namespace App\Services\Register;

use App\Repositories\Register\RegisterRepositoryInterface;
use App\Services\BaseService;

class RegisterService extends BaseService implements RegisterServiceInterface
{
    public $repository;

    public function __construct(RegisterRepositoryInterface $registerRepository)
    {
        $this->repository = $registerRepository;
    }
}
