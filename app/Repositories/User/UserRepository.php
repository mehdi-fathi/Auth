<?php

namespace App\Repositories\User;

use App\Models\User;

/**
 * Interface UserRepository
 */
interface UserRepository
{
    public function create(array $data) : User;
}
