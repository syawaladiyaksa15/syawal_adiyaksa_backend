<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ForgotPasswordController;
use Illuminate\Support\Facades\Route;

// **
//  api handle register, login
// **
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::middleware('auth:api')->group(function () {
    // **
    // handler api article
    // **
    Route::get('/article', [ArticleController::class, 'index']);
    Route::get('/article/{article}', [ArticleController::class, 'detail']);
    Route::post('/article', [ArticleController::class, 'store']);
    Route::put('/article/{article}', [ArticleController::class, 'update']);
    Route::delete('/article/{article}', [ArticleController::class, 'destroy']);

});
