<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AspkarPositifController;

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
        return redirect()->route('login');
    }
});

// Dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Login
Route::get('login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('login', [AuthController::class, 'authenticate'])->middleware('guest')->name('login.post');

// Logout
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout.get');
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout.post');

// semester
Route::resource('konfigurasi/semester', SemesterController::class)->middleware('auth');

// Aspek Karakter Positif
Route::resource('aspek-karakter/positif', AspkarPositifController::class)->middleware('auth');

// Mengarahkan ke halaman sebelumnya jika halaman tidak ditemukan
Route::fallback(function () {
    return redirect()->back();
});
