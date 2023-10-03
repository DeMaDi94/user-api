<?php

namespace App\Http\Components\AuthUserManagement\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserService
{
    public function loginUser(Request $request): string
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return "logged in";
        }


        throw new \Exception("test");
    }
}
