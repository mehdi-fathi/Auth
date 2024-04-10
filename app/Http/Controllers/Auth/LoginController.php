<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(LoginRequest $request)
    {
        if ($this->UserService->login($request->validated())) {
            return redirect()->intended(route('dashboard.index'));
        }

        return back();
    }
}
