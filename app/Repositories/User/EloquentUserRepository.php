<?php

namespace App\Repositories\User;

use App\Models\User;

/**
 * Class EloquentUserRepository
 */
class EloquentUserRepository implements UserRepository
{
    /**
     * @var \App\Models\User
     */
    protected User $model;

    /**
     * EloquentUserRepository constructor.
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * @param array $data
     * @return void
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

}
