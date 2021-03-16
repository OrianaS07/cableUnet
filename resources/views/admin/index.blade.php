@extends('adminlte::page')

@section('title', 'cableUnet')

@section('content_header')
    <h1 class="text-center text-6xl">Bienvenido a Cable Unet</h1>
@stop

@section('content')
    <div class="card bg-gray-dark">
        <div class="class-body ">
            <h3 class="text-5xl font-bold text-center">En CableUnet puedes encontrar cualquier servicio de comunicación que necesites</h3>
        </div>
    </div>
    <div class="card bg-gray-dark">
        <div class="class-body ">
            <h3 class="text-4xl font-regular text-center">Contamos con servicios de Telefonia, Internet y Cable, el servicio de Cable cuenta con sus respectivos Planes y canales</h3>
        </div>
    </div>
    <div class="card bg-gray-dark">
        <div class="class-body ">
            <h3 class="text-4xl font-regular text-center">Tienes la Posibilidad de Suscribir un paquete mensual!!!</h3>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop