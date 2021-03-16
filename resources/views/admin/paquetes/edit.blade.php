@extends('adminlte::page')

@section('title', 'cableUnet')

@section('content_header')
    <h1>Editando Paquetes</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card bg-gray-dark">
        <div class="card-body">

            <form action="{{route('admin.paquetes.update',$paquete)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label> Nombre: 
                        <input type="text" name="nombre" class="form-control" value="{{old('nombre',$paquete->nombre)}}" placeholder="Ingrese el Nombre del Paquete">
                    </label>
                    @error('nombre')
                        <br>
                        <small class="text-danger">*{{$message}}</small>
                        <br>
                    @enderror
                </div>
                <div class="form-group">
                    <label> Precio: 
                        <input type="number" name="precio" class="form-control" value="{{old('precio',$paquete->precio)}}" placeholder="Ingrese el Precio del Paquete">
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
                        @if ($paquete->internet_id)
                            <option value="">{{$internet->find($paquete->internet_id)->nombre}}</option>
                        @else
                            <option value="">---</option>
                        @endif
                        @foreach ($internet as $inter)
                            <option value="{{$inter->id}}">{{$inter->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="cable_id">Servicios de Cable</label>
                    <select name="cable_id" class="form-control">
                        

                        @if ($paquete->cable_id)
                            <option value="">{{$cable->find($paquete->cable_id)->nombre}}</option>
                        @else
                            <option value="">---</option>
                        @endif
                                   
                        @foreach ($cable as $cabl)
                            <option value="{{$cabl->id}}">{{$cabl->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="telefonia_id">Servicios de Telefonia</label>
                    <select name="telefonia_id" class="form-control">
                        @if ($paquete->telefonia_id)
                            <option value="">{{$telefonia->find($paquete->telefonia_id)->nombre}}</option>
                        @else
                            <option value="">---</option>
                        @endif
                        @foreach ($telefonia as $telefon)
                            <option value="{{$telefon->id}}">{{$telefon->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Actualizar Paquete</button>
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