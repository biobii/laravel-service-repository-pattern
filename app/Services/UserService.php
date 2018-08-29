<?php

namespace App\Services;

use App\Services\Contract\UserContract;
use App\Repositories\Contract\UserContract as UserRepositoryContract;

class UserService implements UserContract
{
    protected $userRepository;
    
    public function __construct(UserRepositoryContract $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function get($id)
    {
        return $this->userRepository->find($id);
    }
}