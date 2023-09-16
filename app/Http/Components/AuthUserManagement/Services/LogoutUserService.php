<?php

namespace App\Http\Components\AuthUserManagement\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutUserService
{
    public function logoutUser(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return [
            'message' => __(
                'auth.loggedOut'
            ),
        ];
    }
}
