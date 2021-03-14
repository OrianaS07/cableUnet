<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Canal;

class CanalController extends Controller
{
    public function index(){
        $canales = Canal::all();

        return view('canales.index', compact('canales'));
    }    
}
