<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StoreRegisterUserRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(StoreRegisterUserRequest $request)
    {
        $user = User::create($request->validated());

        Auth::login($user);

        return redirect("/home");
    }
}
