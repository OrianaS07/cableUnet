<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CanalController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\ProgramaController;

//----- Rutas de Paquetes inicio -----
Route::get('/', [PaqueteController::class, 'index'])->name('paquetes.index');
Route::get('paquetes/{paquete}', [PaqueteController::class, 'show'])->name('paquetes.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ---- Rutas de programacion -------- 
Route::get('/programacion', [CanalController::class, 'mostrar'])->name('programacion.index');

Route::get('programacion/mostrar', [CanalController::class, 'mostrar'])->name('programacion.mostrar');

Route::get('programacion/canal/{id}', [CanalController::class, 'canal'])->name('programacion.canal');

Route::get('programacion/programa/{id}', [ProgramaController::class, 'programa'])->name('programacion.programa');
