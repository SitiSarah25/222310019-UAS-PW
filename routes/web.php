<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("auth.signIn");
})->name("login");

Route::post('/login', [AuthController::class, "login"]);

Route::get('/response', [ResponseController::class, "index"])->middleware("auth");
Route::post('/response', [ResponseController::class, 'result'])->name('result');
Route::get('/dashboard', [DashboardController::class, "index"])->middleware("auth")->name('dashboard.admin');
Route::post('/dashboard', [DashboardController::class, "store"]);
Route::get('/get-cities/{provinceId}', [DashboardController::class, 'getCities']);

// Route::get('/dashboard', [ReportController::class, 'index']);

Route::post('/logout', [AuthController::class, 'logout']);
