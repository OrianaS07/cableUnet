<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programa;

class ProgramaController extends Controller
{
    public function index(){
        $programas = Programa::all();

        return view('programas.index', compact('programas'));
    }    
}
