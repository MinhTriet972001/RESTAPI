<?php

use App\Http\Controllers\BE\AuthController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BE\DashboardController;
use App\Http\Middleware\LoginMiddleware;
use App\Http\Controllers\BE\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login',[AuthController::class,'index'])->name('auth.login')->middleware(LoginMiddleware::class);

Route::get('dashboard/index',[DashboardController::class,'index'])->name('dashboard.index')->middleware(Authenticate::class);
Route::post('login',[AuthController::class,'login'])->name('auth.dologin');

Route::get('logout',[AuthController::class,'logout'])->name('auth.logout');

Route::get('user/index',[UserController::class,'index'])->name('user.index');