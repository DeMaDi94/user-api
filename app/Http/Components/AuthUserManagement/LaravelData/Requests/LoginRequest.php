<?php

namespace App\Http\Components\AuthUserManagement\LaravelData\Requests;

class LoginRequest extends \Spatie\LaravelData\Data
{
    public function __construct(
        public string $email,
        public string $password
    ) {
    }
}
