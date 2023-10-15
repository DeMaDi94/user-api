<?php

namespace App\Http\Components\AuthUserManagement\Services;

use Illuminate\Http\Request;

class LogoutUserService
{
    public function logoutUser(Request $request)
    {
        $request->session()->invalidate();


        return [
            'message' => __(
                'auth.loggedOut'
            ),
        ];
    }
}
