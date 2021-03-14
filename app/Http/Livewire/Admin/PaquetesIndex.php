<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Paquete;
use Livewire\WithPagination;

class PaquetesIndex extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $paquetes = Paquete::all();
        return view('livewire.admin.paquetes-index', compact('paquetes'));
    }
}
