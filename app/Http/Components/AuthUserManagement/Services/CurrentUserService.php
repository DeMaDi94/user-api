<?php

namespace App\Http\Components\AuthUserManagement\Services\WorkflowServices;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CurrentUserService
{
    public function getCurrentUser(Request $request): object
    {
        return $request->user();
    }
}
