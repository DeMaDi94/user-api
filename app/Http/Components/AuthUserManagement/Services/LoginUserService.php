<?php

namespace App\Http\Components\AuthUserManagement\Services\WorkflowServices;

use App\Http\Components\AuthUserManagement\Exceptions\LoginFailsException;
use App\Http\Components\AuthUserManagement\Exceptions\LoginValidationFailsException;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Auth;

class LoginUserService
{
    public function loginUser(mixed $request): array
    {

        $request->authenticate();

        $request->session()->regenerate();

        return [
            'message' => __(
                'auth.loggedIn'
            ),
        ];
    }
}
