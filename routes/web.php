<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContentController;

Route::get('/', function () {return redirect()->route('login');});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Trasy dla widoków
Route::get('/get-content/{type}', [ContentController::class, 'getContent']);
Route::post('/employees', [ContentController::class, 'store'])->name('employees.store');
Route::get('/search-employees', [ContentController::class, 'search'])->name('employees.search');




Route::post('logout', [AuthController::class, 'logout'])->name('logout');
