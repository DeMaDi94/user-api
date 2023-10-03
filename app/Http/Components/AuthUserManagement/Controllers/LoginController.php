<?php

namespace App\Http\Components\AuthUserManagement\Controllers;

use App\Http\Components\AuthUserManagement\Services\LoginUserService;
use Illuminate\Http\Request;

class LoginController
{
    public function __invoke(Request $request, LoginUserService $login_service)
    {
        try {

            $message = $login_service->loginUser($request);

            return response()->json([
                'message' => $message,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Uncorrect credentials!'
            ], 500);
        }
    }
}
