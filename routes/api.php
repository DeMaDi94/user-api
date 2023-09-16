<?php

use App\Http\Components\AuthUserManagement\Controllers\CurrentUserController;
use App\Http\Components\AuthUserManagement\Controllers\LoginController;
use App\Http\Components\AuthUserManagement\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', LoginController::class);

Route::group(['middleware' => ['auth:sanctum'], 'prefix' => '/user'], function () {
    Route::get('/', CurrentUserController::class);

    Route::post('/logout', LogoutController::class);
});
