<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\TokenVerificationMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('/registration', [UserController::class, 'UserRegistration']);
Route::post('/login', [UserController::class, 'UserLogin']);
Route::post('/otp', [UserController::class, 'sendOTPCode']);
Route::post('/verify-otp', [UserController::class, 'verifyOTPCode']);

Route::post('/resetPass', [UserController::class, 'resetPass'])
    ->middleware(TokenVerificationMiddleware::class);




Route::get('/userLogin', [UserController::class, 'loginPage']);
Route::get('/userRegistration', [UserController::class, 'registrationPage']);
Route::get('/sendOTP', [UserController::class, 'sendOtpPage']);
Route::get('/verifyOtp', [UserController::class, 'verifyOtpPage']);
Route::get('/resetPass', [UserController::class, 'resetPassPage'])
    ->middleware(TokenVerificationMiddleware::class);
Route::get('/dashboard', [DashboardController::class, 'dashboardPage'])
    ->middleware(TokenVerificationMiddleware::class);

Route::get('/logout', [UserController::class, 'logout']);



Route::get('/userProfile', [UserController::class, 'profilePage'])
    ->middleware(TokenVerificationMiddleware::class);


Route::get('/user-profile', [UserController::class, 'userProfile'])->middleware(TokenVerificationMiddleware::class);
Route::post('/updateProfile', [UserController::class, 'updateProfile'])->middleware(TokenVerificationMiddleware::class);








