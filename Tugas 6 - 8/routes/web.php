<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'main']);

#tugas 6
Route::get('/tugas6', [HomeController::class, 'index']);

#tugas 7
Route::get('/tugas7',[MemberController::class, 'index']);
Route::post('/store', [MemberController::class, 'store']);

Route::get('/details/{member}', [MemberController::class, 'getDataByID']);

Route::get('/delete/{member}', [MemberController::class, 'destroy']);
Route::get('/update/{member}', [MemberController::class, 'edit']);
Route::post('/update/{member}/edit', [MemberController::class, 'update']);

#tugas 8
// Rute utama langsung ke halaman login
Route::get('/tugas8', function () {
    return redirect()->route('login.form');
});

// Rute untuk halaman login
Route::get('/login', [LoginController::class, 'login'])->name('login.form')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login')->middleware('guest');

// Rute untuk halaman register
Route::get('/register', [RegisterController::class, 'create'])->name('register.form')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register')->middleware('guest');

// Rute untuk halaman home (setelah login berhasil)
Route::view('/home', 'tugas8.home')->name('home')->middleware('auth');

// Rute untuk logout
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/tugas8');
})->name('logout')->middleware('auth');
