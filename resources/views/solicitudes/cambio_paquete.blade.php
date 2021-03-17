@extends('adminlte::page')

@section('title', 'cableUnet')

@section('content_header')
    <h1 class="text-center text-6xl">Solicitar cambio de paquete</h1>
@stop

@section('content')
    <div class="card bg-gray-dark">
        <div class="class-body ">
            <form action="{{route('solicitudes.procesar')}}" method="POST">
                @csrf
                <label>Paquetes disponibles
                <select class="form-control">
                    @foreach ($paquetes as $paquete)
                        <option name="paquete" value="{{$paquete->id}}">{{$paquete->nombre}}</option>
                    @endforeach
                </select>
                </label>
                <br>
                <button class="btn btn-primary" type="submit">Solicitar cambio</button>
            </form>
            
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop