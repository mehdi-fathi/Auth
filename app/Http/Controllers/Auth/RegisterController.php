<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StoreRegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(StoreRegisterUserRequest $request)
    {
        $user = User::query()->create($request->validated());
        Auth::login($user);
    }

}
