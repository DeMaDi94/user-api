<?php

namespace App\Http\Components\UserManagement\Services;

use App\Models\User;

class UserListService
{
    public function list()
    {
        return User::all();
    }
}
