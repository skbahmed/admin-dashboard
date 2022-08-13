<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::resource('articles', ArticleController::class)->middleware(['auth']);
Route::get('articles/delete/{article}', [ArticleController::class, 'destroy']);
Route::resource('users', UserController::class)->middleware(['auth']);
Route::get('user/profile', [UserController::class, 'authProfile'])->middleware(['auth']);

require __DIR__.'/auth.php';
