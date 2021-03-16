<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Canal;

class CanalController extends Controller
{
    public function index(){
<<<<<<< HEAD
        $canales = Canal::all();

        return view('canales.index', compact('canales'));
    }    
=======
        return view('programacion.index');
    }
    
    public function mostrar(Request $request){
        $canales = Canal::all();
        $fecha = $request->fecha;
        return view('programacion.mostrar', compact('canales', 'fecha'));
    }

    public function canal($id){
        $canal =  Canal::find($id);
        return view('programacion.canal', compact('canal'));
    }

    
>>>>>>> feature-programacion
}
