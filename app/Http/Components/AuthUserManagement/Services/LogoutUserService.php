<?php

namespace App\Http\Components\AuthUserManagement\Services\WorkflowServices;

use App\Http\Repositories\FrameworkRepositories\AuthRepository;
use App\Http\Repositories\FrameworkRepositories\LocalizationRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutUserService
{
    public function logoutUser(Request $request): array
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return [
            'message' => __(
                'auth.loggedOut'
            ),
        ];
    }
}
