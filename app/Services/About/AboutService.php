<?php

namespace App\Services\About;

use App\Repositories\About\AboutRepositoryInterface;
use App\Services\BaseService;

class AboutService extends BaseService implements AboutServiceInterface
{
    public $repository;

    public function __construct(AboutRepositoryInterface $aboutRepository)
    {
        $this->repository = $aboutRepository;
    }
}
