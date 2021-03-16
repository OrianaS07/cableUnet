@extends('adminlte::page')

@section('title', 'cableUnet')

@section('content_header')
    @can('admin.paquetes.create')
        <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.paquetes.create')}}">Nuevo Paquete</a>
    @endcan
    <h1>Listado de Paquetes</h1>
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
@stop

@section('content')
    @livewire('admin.paquetes-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop