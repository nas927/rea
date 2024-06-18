<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ActuController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/actualite', [ActuController::class, 'index']);
