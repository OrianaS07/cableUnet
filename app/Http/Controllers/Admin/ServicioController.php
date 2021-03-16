<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cable;
use App\Models\Internet;
use App\Models\Plan;
use App\Models\Telefonia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.servicios.index')->only('index');
        $this->middleware('can:admin.servicios.edit')->only('edit','update','show');
        $this->middleware('can:admin.servicios.created')->only('created','store');
        $this->middleware('can:admin.servicios.destroy')->only('destroy');
    }

    public function index()
    {
        //recuperar coleccion de servicios
        $serInternet = Internet::all();
        $serCable = Cable::all();
        $serTelefonia = Telefonia::all();

        return view('admin.servicios.index',compact('serInternet','serCable','serTelefonia')); //muestra lista de servicios
    }

    public function edit($id, $nombre)
    {
        if($nombre == 'internet')$servicio = Internet::find($id);
        if($nombre == 'cable') {
            $servicio = Cable::find($id);
            $planes = Plan::all();
            return view('admin.servicios.edit', ['servicio'=>$servicio, 'tipo'=> $nombre, 'planes'=>$planes]);
        }
        if($nombre == 'telefonia') $servicio = Telefonia::find($id);        
        
        return view('admin.servicios.edit', ['servicio'=>$servicio, 'tipo'=> $nombre]);
        
    }

    public function delete($id, $nombre)
    {
        if($nombre == 'internet')$servicio = Internet::find($id);
        if($nombre == 'cable') $servicio = Cable::find($id);
        if($nombre == 'telefonia') $servicio = Telefonia::find($id);

        $servicio->delete();

        return redirect()->route('admin.servicios.index')->with('info','El Servicio se Elimino con exito');
    }

    public function created(Request $request)
    {   
        $planes = Plan::all();
        $tipo = $request->tipo;
        return view('admin.servicios.created',compact('tipo','planes'));
    }

    public function store($tipo, Request $request)
    {
        
        if($tipo == 'internet'){
            //validacion
            // $request->validate([
            //      'nombre' => 'required',
            //      'velocidad' => 'requeried',
            //      'precio' => 'required'
            // ]);
            $internet = Internet::create($request->all());
            return redirect()->route('admin.servicios.edit',[$internet, $tipo])->with('info','El Servicio se Creo con exito');
        }
        if($tipo == 'cable') {
            // $request->validate([
            //      'nombre' => 'required',
            //      'velocidad' => 'requeried',
            //      'precio' => 'required'
            // ]);

            $cable = Cable::create($request->all());

            $planes = Plan::all();
            return redirect()->route('admin.servicios.edit',[$cable,$tipo])->with('info','El Servicio se Creo con exito');
        }
        if($tipo == 'telefonia') {
            // $request->validate([
            //      'nombre' => 'required',
            //      'velocidad' => 'requeried',
            //      'precio' => 'required'
            // ]);
            $telefonia = Telefonia::create($request->all());
            return redirect()->route('admin.servicios.edit',[$telefonia, $tipo])->with('info','El Servicio se Creo con exito');
        }

    }

    public function update($tipo, $id , Request $request)
    {
        if($tipo == 'internet'){
            $servicio = Internet::find($id);
            //validacion
            // $request->validate([
            //      'nombre' => 'required',
            //      'velocidad' => 'requeried',
            //      'precio' => 'required'
            // ]);
            $servicio->update($request->all());
            return redirect()->route('admin.servicios.edit',[$servicio, $tipo])->with('info','El Servicio se Actualizo con exito');
        }
        if($tipo == 'cable') {
            $servicio = Cable::find($id);
            //validacion
            // $request->validate([
            //      'nombre' => 'required',
            //      'velocidad' => 'requeried',
            //      'precio' => 'required'
            // ]);
            $servicio->update($request->all());
            return redirect()->route('admin.servicios.edit',[$servicio, $tipo])->with('info','El Servicio se Actualizo con exito');
        }
        if($tipo == 'telefonia') {
            $servicio = Telefonia::find($id);
            //validacion
            // $request->validate([
            //      'nombre' => 'required',
            //      'velocidad' => 'requeried',
            //      'precio' => 'required'
            // ]);
            $servicio->update($request->all());
            return redirect()->route('admin.servicios.edit',[$servicio, $tipo])->with('info','El Servicio se Actualizo con exito');;
        }
        
    }

    
}
