<?php

namespace App\Http\Components\AuthUserManagement\Controllers;

use App\Http\Components\AuthUserManagement\Services\WorkflowServices\LogoutUserService;
use Illuminate\Http\Request;

class UserLogoutController
{
    public function __invoke(
        LogoutUserService $logout_service,
        Request $request
    ) {
        $response = $logout_service->logoutUser($request);

        return response()->json($response, 200);
    }
}
