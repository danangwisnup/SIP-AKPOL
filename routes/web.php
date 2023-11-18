<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

// Default Route
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('login.get');
    }
});

// Dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Login
Route::get('login', [AuthController::class, 'index'])->middleware('guest')->name('login.get');
Route::post('login', [AuthController::class, 'authenticate'])->middleware('guest')->name('login.post');

// Logout
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout.get');
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout.post');
