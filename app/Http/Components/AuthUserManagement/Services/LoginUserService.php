<?php

namespace App\Http\Components\AuthUserManagement\Services;

use App\Http\Components\AuthUserManagement\LaravelData\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginUserService
{
    public function loginUser(array $request): User
    {

        if (!Auth::attempt([$request['email'], $request['password']])) {
            return response()->json([
                'status' => false,
                'message' => 'Email & Password does not match with our record.',
            ], 401);
        }

        $user = User::where('email', $request['email'])->first();

        return $user;
    }
}
