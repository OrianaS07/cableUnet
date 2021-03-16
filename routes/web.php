<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CanalController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\SolicitudController;


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

Route::get('solicitudes/cambio_paquete', [SolicitudController::class, 'solicitud'])->name('solicitudes.cambio_paquete');

Route::post('/', [SolicitudController::class, 'procesar_solicitud'])->name('solicitudes.procesar');
