<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UsuarioController::class, 'welcome']);

Route::get('/register', [UsuarioController::class, 'register']);

Route::post('/register/candidate', [UsuarioController::class, 'store']);