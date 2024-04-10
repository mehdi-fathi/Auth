<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StoreRegisterUserRequest;
use Illuminate\Support\Facades\Auth;

/**
 *
 */
class RegisterController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * @param \App\Http\Requests\Auth\StoreRegisterUserRequest $request
     * @return void
     */
    public function store(StoreRegisterUserRequest $request)
    {
        $user = $this->UserService->create($request->validated());
        Auth::login($user);
    }

}
