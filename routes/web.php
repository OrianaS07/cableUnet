<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CanalController;
use App\Http\Controllers\PaqueteController;

Route::get('/', [PaqueteController::class, 'index'])->name('paquetes.index');
Route::get('paquetes/{paquete}', [PaqueteController::class, 'show'])->name('paquetes.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/programacion', [CanalController::class, 'index'])->name('canales.index');