<?php

use App\Http\Controllers\Admin\FacturaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PaqueteController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\ServicioController;
use App\Http\Controllers\Admin\UserController;


// ----- RUTAS USUARIOS -----
Route::resource('users', UserController::class)->names('admin.users');

//----- RUTAS DE ADMINISTRADOR -----
Route::get('', [HomeController::class,'index'])->middleware('can:admin.home')->name('admin.home');

// ------ RUTA PARA CRUD DE SERVICIOS ------
Route::get('servicios', [ServicioController::class, 'index'])->middleware('can:admin.servicios.index')->name('admin.servicios.index');

Route::get('servicios/edit/{id}/{nombre}', [ServicioController::class, 'edit'])->middleware('can:admin.servicios.edit')->name('admin.servicios.edit');

Route::delete('servicios/delete/{id}/{nombre}', [ServicioController::class, 'delete'])->middleware('can:admin.servicios.destroy')->name('admin.servicios.delete');

Route::post('servicios/created', [ServicioController::class, 'created'])->middleware('can:admin.servicios.created')->name('admin.servicios.created');

Route::get('servicios/opcion', function () {
    return view('admin.servicios.opcion'); 
})->name('admin.servicios.opcion');

Route::post('servicios/store/{tipo}', [ServicioController::class , 'store'])->name('admin.servicios.store');

Route::put('servicios/update/{id}/{tipo}', [ServicioController::class , 'update'])->name('admin.servicios.update');

// ------- RUTAS DE PAQUETES -----
Route::resource('paquetes', PaqueteController::class)->names('admin.paquetes');

// ------- RUTAS DE PLANES -------
Route::resource('plans', PlanController::class)->names('admin.plans');

// ----- RUTAS DE FACTURAS -----
Route::resource('facturas', FacturaController::class)->names('admin.facturas');

