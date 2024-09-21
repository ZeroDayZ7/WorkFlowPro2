<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Employee\EmployeeController;

Route::get('/', function () {return redirect()->route('login');});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Trasy dla widoków
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');
