<?php

namespace App\Http\Controllers;

use App\Models\Cable;
use App\Models\Internet;
use App\Models\Paquete;
use App\Models\Telefonia;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    public function index()
    {
        $paquetes = Paquete::all();
        return view('paquetes.index', compact('paquetes'));
    }

    public function show(Paquete $paquete)
    {
        $internets=Internet::all();
        $cables = Cable::all();
        $telefonias = Telefonia::all();
        return view('paquetes.show',compact('paquete','internets','cables','telefonias'));
    }
}
