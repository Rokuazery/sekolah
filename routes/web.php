<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DaftarSiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

// Auth & Register
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');

// Account
Route::get('account', [AccountController::class, 'create'])->name('account');
Route::get('edit-account', [AccountController::class, 'editAccount'])->name('edit-account');
Route::post('update-account/{id}', [AccountController::class, 'update'])->name('account.update');

// Menu
Route::get('/', [DashboardController::class, 'create'])->name('dashboard');
Route::get('dashboard', [DashboardController::class, 'create'])->name('dashboard');
Route::get('daftar-siswa', [DaftarSiswaController::class, 'create'])->name('daftar-siswa');

// Auth & Register function
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::post('post-register', [AuthController::class, 'postRegister'])->name('register.post');

// Index user function
Route::get('get-siswas', [DaftarSiswaController::class, 'index'])->name('siswas.get');
