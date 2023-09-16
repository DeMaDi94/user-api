<?php

namespace App\Http\Components\AuthUserManagement\Controllers;

use App\Http\Components\AuthUserManagement\LaravelData\Requests\LoginRequest;
use App\Http\Components\AuthUserManagement\Services\LoginUserService;

class LoginController
{
    public function __invoke(LoginRequest $request, LoginUserService $login_service)
    {
        try {

            $user = $login_service->loginUser($request->all());

            response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
