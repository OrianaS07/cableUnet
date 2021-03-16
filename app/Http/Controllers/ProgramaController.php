<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;

class ProgramaController extends Controller
{
    public function programa($id){
        $programa = Programa::find($id);
        return view('programacion.programa', compact('programa'));
    }
}
