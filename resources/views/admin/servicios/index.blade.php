@extends('adminlte::page')

@section('title', 'cableUnet')

@section('content_header')
    <h1>Lista de Servicios</h1>
@stop

@section('content')
    {{-- poner una lista y que sellecione que servicios quiere ver y asi mostrar o dejar asi --}}
    {{-- Servicios de Cable --}}
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.servicios.opcion')}}">Crear nuevo servicio</a>
            <h3 class="text-center">Servicios de Cable</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <t-head>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>PLAN</th>
                        <th>PRECIO</th>
                        <th colspan=2></th>
                    </tr>
                </t-head>
                <t-body>
                    @foreach ($serCable as $cable)
                        <tr>
                            <td>{{$cable->id}}</td>
                            <td>{{$cable->nombre}}</td>
                            <td>{{$cable->plan_id}}</td>
                            <td>{{$cable->precio}}</td>
                            <td width='10px'><a class="btn btn-primary btn-sm" href="{{route('admin.servicios.edit',[$cable->id, $cable->nombre()])}}">Editar</a></td>
                            <td width='10px'>
                                <form action="{{route('admin.servicios.delete',[$cable->id, $cable->nombre()])}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </t-body>
            </table>
        </div>
    </div>
    {{-- Servicios de Internet --}}
    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Servicios de Internet</h2>
            <table class="table table-striped">
                <t-head>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>VELOCIDAD</th>
                        <th>PRECIO</th>
                        <th colspan=2></th>
                    </tr>
                </t-head>
                <t-body>
                    @foreach ($serInternet as $internet)
                        <tr>
                            <td>{{$internet->id}}</td>
                            <td>{{$internet->nombre}}</td>
                            <td>{{$internet->velocidad}}</td>
                            <td>{{$internet->precio}}</td>
                            <td width='10px'><a class="btn btn-primary btn-sm" href="{{route('admin.servicios.edit',[$internet->id, $internet->nombre()])}}">Editar</a></td>
                            <td width='10px'>
                                <form action="{{route('admin.servicios.delete',[$internet->id, $internet->nombre()])}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </t-body>
            </table>
        </div>
    </div>
    {{-- Servicios de Telefonia --}}
    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Servicios de Telefonia</h2>
            <table class="table table-striped">
                <t-head>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>MINUTOS</th>
                        <th>PRECIO</th>
                        <th colspan=2></th>
                    </tr>
                </t-head>
                <t-body>
                    @foreach ($serTelefonia as $telefonia)
                        <tr>
                            <td>{{$telefonia->id}}</td>
                            <td>{{$telefonia->nombre}}</td>
                            <td>{{$telefonia->minutos}}</td>
                            <td>{{$telefonia->precio}}</td>
                            <td width='10px'><a class="btn btn-primary btn-sm" href="{{route('admin.servicios.edit',[$telefonia->id, $telefonia->nombre()])}}">Editar</a></td>
                            <td width='10px'>
                                <form action="{{route('admin.servicios.delete',[$cable->id, $cable->nombre()])}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </t-body>
            </table>
        </div>
    </div>
@stop
