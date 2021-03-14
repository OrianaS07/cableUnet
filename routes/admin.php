<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PaqueteController;
use App\Http\Controllers\Admin\ServicioController;


//----- RUTAS DE ADMINISTRADOR -----
Route::get('', [HomeController::class,'index'])->name('admin.home');

// ------ RUTA PARA CRUD DE SERVICIOS ------
Route::get('servicios', [ServicioController::class, 'index'])->name('admin.servicios.index');

Route::get('servicios/edit/{id}/{nombre}', [ServicioController::class, 'edit'])->name('admin.servicios.edit');

Route::delete('servicios/delete/{id}/{nombre}', [ServicioController::class, 'delete'])->name('admin.servicios.delete');

Route::post('servicios/created', [ServicioController::class, 'created'])->name('admin.servicios.created');

Route::get('servicios/opcion', function () {
    return view('admin.servicios.opcion'); 
})->name('admin.servicios.opcion');

Route::post('servicios/store/{tipo}', [ServicioController::class , 'store'])->name('admin.servicios.store');

Route::put('servicios/update/{id}/{tipo}', [ServicioController::class , 'update'])->name('admin.servicios.update');

// ------- RUTAS DE PAQUETES -----
Route::resource('paquetes', PaqueteController::class)->names('admin.paquetes');