<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ActuController;
use App\Http\Controllers\SimulationController;
use App\Http\Controllers\SubDropController;
use App\Http\Controllers\SimulationSendController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about/{name}', [SubDropController::class, 'index']);
Route::get('/actualite', [ActuController::class, 'index']);
Route::get('/simulation', [SimulationController::class, 'index'])->name('simulation');
Route::get('/send', [SimulationSendController::class, 'index'])->name('send');
