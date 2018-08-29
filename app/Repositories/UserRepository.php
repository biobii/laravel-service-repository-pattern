<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use App\Repositories\Contract\UserContract;

class UserRepository extends BaseRepository implements UserContract
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }
}