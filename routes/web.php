<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;

Route::get('/', [HalamanController::class, 'index']);
Route::get('/login', [HalamanController::class, 'login']);
Route::get('/home', [HalamanController::class, 'home']);