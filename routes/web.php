<?php

use App\Http\Controllers\SaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

// Route untuk halaman awal
Route::get('/', function () {
    return 'Hallo ID-Networkers!';
});

// Authentication Routes
Auth::routes();

// Route untuk halaman home
Route::get('/home', [SaranController::class, 'index'])->name('home');

// Route resource untuk fitur kotak saran
Route::resource('kotak_saran', SaranController::class);