<?php

namespace App\Http\Components\AuthUserManagement\Controllers;

use App\Http\Components\AuthUserManagement\Services\WorkflowServices\LoginUserService;
use Illuminate\Http\Request;

class LoginController
{
    public function __invoke(Request $request, LoginUserService $login_service)
    {
        $response = $login_service->loginUser($request);

        return response()->json($response, 200);
    }
}
