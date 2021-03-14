@extends('adminlte::page')

@section('title', 'cableUnet')

@section('content_header')
    <h1>Crear Paquetes</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            <form action="{{route('admin.paquetes.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label> Nombre: 
                        <input type="text" name="nombre" class="form-control" placeholder="Ingrese el Nombre del Paquete">
                    </label>
                    @error('nombre')
                        <br>
                        <small class="text-danger">*{{$message}}</small>
                        <br>
                    @enderror
                </div>
                <div class="form-group">
                    <label> Precio: 
                        <input type="number" name="precio" class="form-control" placeholder="Ingrese el Precio del Paquete">
                    </label>
                    @error('precio')
                        <br>
                        <small class="text-danger">*{{$message}}</small>
                        <br>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="internet_id">Servicios de Internet</label>
                    <select name="internet_id" class="form-control">
                        <option value=""></option>
                        @foreach ($internet as $inter)
                            <option value="{{$inter->id}}">{{$inter->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="cable_id">Servicios de Cable</label>
                    <select name="cable_id" class="form-control">
                        <option value=""></option>
                        @foreach ($cable as $cabl)
                            <option value="{{$cabl->id}}">{{$cabl->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="telefonia_id">Servicios de Telefonia</label>
                    <select name="telefonia_id" class="form-control">
                        <option value=""></option>
                        @foreach ($telefonia as $telefon)
                            <option value="{{$telefon->id}}">{{$telefon->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Crear Paquete</button>
                </div>
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