<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Canal;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    //permisos de los diferentes metodos
    public function __construct()
    {
        $this->middleware('can:admin.plans.index')->only('index');
        $this->middleware('can:admin.plans.edit')->only('edit','update','show');
        $this->middleware('can:admin.plans.create')->only('create','store');
        $this->middleware('can:admin.plans.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::all();
        return view('admin.plans.index',compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $canales = Canal::all();
        return view('admin.plans.create',compact('canales'));
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
            'nombre' => 'required|unique:plans',
            'canales' => 'required'
        ]);
        $plan = Plan::create($request->all());
        if($request->canales){
            $plan->canales()->attach($request->canales);
        }
        return redirect()->route('admin.plans.edit',$plan)->with('info','Plan Creado con Exito');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        return view('admin.plans.show',compact('plan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        $canales = Canal::all();
        return view('admin.plans.edit',compact('plan','canales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        $request->validate([
            'nombre' => 'required',
            'canales' => 'required'
        ]);

        $plan->update($request->all());

        if($request->canales){
            $plan->canales()->attach($request->canales);
        }
        return redirect()->route('admin.plans.edit',$plan)->with('info','Plan Actualizado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();
        return redirect()->route('admin.plans.index')->with('info','Plan Eliminado con Exito');
    }
}
