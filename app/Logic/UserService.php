<?php

namespace App\Logic;

use App\Repositories\User\UserRepository;
use App\Models\User;


class UserService
{
    /**
     * UserService constructor.
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->userRepo = $user;
    }

    public function create(array $data): User
    {
        return $this->userRepo->create($data);
    }

    public function login(array $data)
    {
        if (auth()->attempt($data)) {
            return true;
        }
        return false;
    }
}
