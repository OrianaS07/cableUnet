<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\solucitudCambio;
use App\Models\Paquete;
use App\Models\solicitudCambio;

class SolicitudController extends Controller
{
    public function solicitud()
    {
        $paquetes = Paquete::all();

        return view('solicitudes.cambio_paquete', compact('paquetes'));
    }

    public function procesar_solicitud(Request $request){
        $solicitud = solicitudCambio::create([
            'nuevo_paquete_id' => $request->paquete,
            'user_id' => auth()->user()->id,
        ]);

        $solicitud->save();
    }
}