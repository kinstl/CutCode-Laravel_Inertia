<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/about', [IndexController::class, 'about'])->name('about');

Route::resource('/users', UserController::class);
