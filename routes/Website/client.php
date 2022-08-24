<?php

use App\Http\Controllers\Web\Client\{
    HomeController
};
use App\Http\Controllers\Web\Client\Auth\{
    LoginController,
    RegisterController,
    LogoutController,
    ForgotPasswordController,
    ResetPasswordController,
    VerifyEmailController,
    ResendVerificationEmailController
};
use App\Http\Middleware\Custom\ClientAuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => 'Client'],
    function () {

        Route::get('/Login', [LoginController::class, 'view']);
        Route::post('/Login', [LoginController::class, 'submit']);

        Route::get('/Register', [RegisterController::class, 'view']);
        Route::post('/Register', [RegisterController::class, 'submit']);

        Route::get('/ForgotPassword', [ForgotPasswordController::class, 'view']);
        Route::post('/ForgotPassword', [ForgotPasswordController::class, 'submit']);

        Route::get('/ResetPassword', [ResetPasswordController::class, 'view']);
        Route::post('/ResetPassword', [ResetPasswordController::class, 'submit']);

        Route::get('/VerifyEmail', [VerifyEmailController::class, 'view']);
        Route::post('/VerifyEmail', [VerifyEmailController::class, 'submit']);

        Route::get('/ResendVerificationEmail', [ResendVerificationEmailController::class, 'view']);
        Route::post('/ResendVerificationEmail', [ResendVerificationEmailController::class, 'submit']);

        Route::group(
            ['middleware' => ClientAuthMiddleware::class],
            function () {
                Route::get('/', [HomeController::class, 'view']);
                Route::get('/Logout', [LogoutController::class, 'submit']);
            }
        );
    }
);
