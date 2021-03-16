<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cable;
use App\Models\Internet;
use App\Models\Paquete;
use App\Models\Telefonia;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    //permisos de los diferentes metodos
    public function __construct()
    {
        $this->middleware('can:admin.paquetes.index')->only('index');
        $this->middleware('can:admin.paquetes.edit')->only('edit','update','show');
        $this->middleware('can:admin.paquetes.create')->only('create','store');
        $this->middleware('can:admin.paquetes.destroy')->only('destroy');
    }

    public function index()
    {
        return view('admin.paquetes.index');
    }

    public function create()
    {
        $internet = Internet::all();
        $cable = Cable::all();
        $telefonia = Telefonia::all();
        return view('admin.paquetes.create', compact('internet','cable','telefonia'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|unique:paquetes',
            'precio' => 'required'
        ]);
        // return $request;
        $paquete = Paquete::create($request->all());

        return redirect()->route('admin.paquetes.edit',$paquete)->with('info','El paquete se Creo con Éxito');
    }

   
    public function show(Paquete $paquete)
    {
        return view('admin.paquetes.show', compact('paquete'));
    }

    
    public function edit(Paquete $paquete)
    {
        $internet = Internet::all();
        $cable = Cable::all();
        $telefonia = Telefonia::all();
        return view('admin.paquetes.edit', compact('paquete','internet','cable','telefonia'));
    }

    
    public function update(Request $request, Paquete $paquete)
    {
        $request->validate([
            'nombre'=>'required',
            'precio' => 'required'
        ]);

        $paquete->update($request->all());
        return redirect()->route('admin.paquetes.edit',[$paquete])->with('info','El paquete se Actualizo con Éxito');
    }

    public function destroy(Paquete $paquete)
    {
        $paquete->delete();
        return redirect()->route('admin.paquetes.index')->with('info','El paquete se Elimino con exito');
    }
}
