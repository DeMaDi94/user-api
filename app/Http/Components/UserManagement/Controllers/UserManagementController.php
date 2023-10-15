<?php

namespace App\Http\Components\UserManagement\Controllers;

use App\Http\Components\UserManagement\Services\UserListService;

class UserManagementController
{
    public function list(UserListService $list_service)
    {
        $data = $list_service->list();

        return response()->json(['data' => $data], 200);
    }
}
