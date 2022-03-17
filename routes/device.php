<?php

use App\Http\Controllers\API\Device\AuthController;
use App\Http\Controllers\API\Device\PlanController;
use App\Http\Controllers\API\Device\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:sanctum','validate.user']], function() {
    
    


});

Route::get('plans',[PlanController::class, 'index'])
    ->name('plans.index');
Route::get('plans/{plan}',[PlanController::class, 'show'])
    ->name('plan.show');
Route::post('plans',[PlanController::class, 'store'])
    ->name('plan.store');
Route::put('plans/{plan}',[PlanController::class, 'update'])
    ->name('plan.update');
Route::delete('plans/{plan}',[PlanController::class, 'delete'])
    ->name('plan.delete');
Route::post('plans/bulk-create',[PlanController::class, 'bulkStore'])
    ->name('plan.store.bulk');
Route::post('plans/bulk-update',[PlanController::class, 'bulkUpdate'])
    ->name('plan.update.bulk');
Route::get('users',[UserController::class, 'index'])
    ->name('users.index');
Route::get('users/{user}',[UserController::class, 'show'])
    ->name('user.show');
Route::post('users',[UserController::class, 'store'])
    ->name('user.store');
Route::put('users/{user}',[UserController::class, 'update'])
    ->name('user.update');
Route::delete('users/{user}',[UserController::class, 'delete'])
    ->name('user.delete');
Route::post('users/bulk-create',[UserController::class, 'bulkStore'])
    ->name('user.store.bulk');
Route::post('users/bulk-update',[UserController::class, 'bulkUpdate'])
    ->name('user.update.bulk');

Route::post('register',[AuthController::class, 'register'])
    ->name('register');
Route::post('login',[AuthController::class, 'login'])
    ->name('login');
Route::post('logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth:sanctum');
Route::put('change-password',[AuthController::class, 'changePassword'])
    ->name('change.password')
    ->middleware(['auth:sanctum','validate.user']);
Route::post('forgot-password', [AuthController::class, 'forgotPassword'])
    ->name('forgot.password');
Route::post('validate-otp',[AuthController::class, 'validateResetPasswordOtp'])
    ->name('reset.password.validate.otp');
Route::put('reset-password',[AuthController::class, 'resetPassword'])
    ->name('reset.password');

