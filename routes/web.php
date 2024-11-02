<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login');
});

//ini route login
// Route::post('/login', [LoginController::class, 'authenticate']);

// Route::post('/admin', [AdminController::class, 'admin']);

// Rute untuk login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

// Rute untuk beranda admin
Route::get('/admin/beranda', [AdminController::class, 'admin'])->middleware('auth');
