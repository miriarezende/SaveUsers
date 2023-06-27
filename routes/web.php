<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UsuarioController::class, 'welcome']);

Route::get('/register', [UsuarioController::class, 'register']);

Route::post('/register/candidate', [UsuarioController::class, 'store']);

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('logout', [LoginController::class, 'logout']);

Route::get('/status/{id}', [UsuarioController::class, 'status'])->middleware('auth');



