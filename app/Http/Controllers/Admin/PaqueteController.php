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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.paquetes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $internet = Internet::all();
        $cable = Cable::all();
        $telefonia = Telefonia::all();
        return view('admin.paquetes.create', compact('internet','cable','telefonia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paquete $paquete)
    {
        return view('admin.paquetes.show', compact('paquete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Paquete $paquete)
    {
        $internet = Internet::all();
        $cable = Cable::all();
        $telefonia = Telefonia::all();
        return view('admin.paquetes.edit', compact('paquete','internet','cable','telefonia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paquete $paquete)
    {
        $request->validate([
            'nombre'=>'required',
            'precio' => 'required'
        ]);

        $paquete->update($request->all());
        return redirect()->route('admin.paquetes.edit',[$paquete])->with('info','El paquete se Actualizo con Éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paquete $paquete)
    {
        $paquete->delete();
        return redirect()->route('admin.paquetes.index')->with('info','El paquete se Elimino con exito');
    }
}
