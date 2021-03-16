<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cable;
use App\Models\Factura;
use App\Models\Internet;
use App\Models\Paquete;
use App\Models\Telefonia;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.facturas.index')->only('index');
        $this->middleware('can:admin.facturas.edit')->only('edit','update','show');
        $this->middleware('can:admin.facturas.created')->only('create','store');
        $this->middleware('can:admin.facturas.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $facturas = Factura::all();
        return view('admin.facturas.index',compact('facturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura)
    {   
        $paquetes = Paquete::all();
        $internets = Internet::all();
        $cables = Cable::all();
        $telefonias = Telefonia::all();
        return view('admin.facturas.show',compact('factura','paquetes','internets','cables','telefonias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    {
        //
    }
}
