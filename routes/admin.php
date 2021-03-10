<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
//----- RUTAS DE ADMINISTRADOR -----
Route::get('', [HomeController::class,'index']);