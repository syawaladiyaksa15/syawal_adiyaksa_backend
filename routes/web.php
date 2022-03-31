<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('/');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// **
// handle article
Route::get('/article', [LandingController::class, 'article'])->name('landing.article');
Route::get('/article/{slug}', [LandingController::class, 'article_detail'])->name('landing.detail.article');

Route::group(['middleware' => ['author', 'auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('author.home');

    // **
    // handler article
    Route::get('/dashboard/article', [ArticleController::class, 'index'])->name('dashboard.article.all');
    Route::get('/dashboard/datatables-article', [ArticleController::class, 'datatable'])->name('dashboard.article.all-datatable');
    Route::get('/dashboard/add-article', [ArticleController::class, 'create'])->name('dashboard.article.create');
    Route::post('/dashboard/add-article', [ArticleController::class, 'store'])->name('dashboard.article.store');
    Route::get('/dashboard/edit-article/{id}', [ArticleController::class, 'edit'])->name('dashboard.article.edit');
    Route::put('/dashboard/update-article/{id}', [ArticleController::class, 'update'])->name('dashboard.article.update');
    Route::get('/dashboard/delete-article/{id}', [ArticleController::class, 'destroy'])->name('dashboard.article.destroy');

});
