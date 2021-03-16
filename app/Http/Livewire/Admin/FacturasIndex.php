<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Factura;
use App\Models\Paquete;
use Livewire\WithPagination;

class FacturasIndex extends Component
{
    use WithPagination;
    public function render()
    {
        $facturas = Factura::where('user_id',auth()->user()->id)
                                    ->paginate(); //obtengo las facturas del usuario autentificado
        $paquetes = Paquete::all();
        return view('livewire.admin.facturas-index', compact('facturas','paquetes'));
    }
}
