<?php

namespace App\Http\Components\AuthUserManagement\Controllers;

use App\Http\Components\AuthUserManagement\Services\LogoutUserService;
use Illuminate\Http\Request;

class LogoutController
{
    public function __invoke(
        LogoutUserService $logout_service,
        Request $request
    ) {
        $response = $logout_service->logoutUser($request);

        return response()->json($response, 200);
    }
}
