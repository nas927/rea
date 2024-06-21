<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ActuController;
use App\Http\Controllers\SimulationController;
use App\Http\Controllers\SubDropController;
use App\Http\Controllers\SimulationSendController;
use App\Http\Controllers\SimulationPageController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about/{name}', [SubDropController::class, 'index']);
Route::get('/actualite', [ActuController::class, 'index']);
Route::get('/simulation', [SimulationController::class, 'index'])->name('simulation');
Route::post('/send', [SimulationSendController::class, 'index'])->name('send');
Route::get('/page/{id}', [SimulationPageController::class, 'index'])->name('page');
