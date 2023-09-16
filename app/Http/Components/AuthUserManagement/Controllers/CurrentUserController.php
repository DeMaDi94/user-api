<?php

namespace App\Http\Components\AuthUserManagement\Controllers;

use App\Http\Components\AuthUserManagement\Services\CurrentUserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CurrentUserController
{
    public function __invoke(CurrentUserService $current_user_service, Request $request): JsonResponse
    {
        $data = $current_user_service->getCurrentUser($request);

        return response()->json(['data' => $data], 200);
    }
}
