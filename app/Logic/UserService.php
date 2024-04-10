<?php

namespace App\Logic;

use App\Repositories\User\UserRepository;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


/**
 *
 */
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

    /**
     * @param array $data
     * @return \App\Models\User
     */
    public function create(array $data): User
    {
        return $this->userRepo->create($data);
    }

    /**
     * @param array $data
     * @return bool
     */
    public function login(array $data): bool
    {
        return auth()->attempt($data);
    }

    /**
     * @param \App\Models\User $user
     * @return void
     */
    public function loginByUser(User $user)
    {
        Auth::login($user);
    }

    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();
    }
}
