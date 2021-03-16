<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CanalController;
use App\Http\Controllers\ProgramaController;

Route::get('/', function () {
      return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/programacion', [CanalController::class, 'index'])->name('programacion.index');

Route::get('programacion/mostrar', [CanalController::class, 'mostrar'])->name('programacion.mostrar');

Route::get('programacion/canal/{id}', [CanalController::class, 'canal'])->name('programacion.canal');

Route::get('programacion/programa/{id}', [ProgramaController::class, 'programa'])->name('programacion.programa');
