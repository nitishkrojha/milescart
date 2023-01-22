<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EventController;

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


Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('verifyEmailOTP', 'verifyEmailOTP');
    Route::post('resendEmailOTP', 'resendEmailOTP'); /* New API */
    Route::post('resetPassword', 'resetPassword'); /* New API */
    Route::get('profile', 'getProfile');
    Route::post('updateProfile', 'updateProfile');
    Route::post('updatePassword', 'updatePassword');
});

Route::controller(EventController::class)->group(function () {
    Route::get('events', 'listEvents');
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
