@extends('adminlte::page')

@section('title', 'cableUnet')

@section('content_header')
    <h1>Editar Servicio</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    @if ($tipo=='cable')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.servicios.update',[$tipo,$servicio->id])}}" method="post">
                @csrf
                @method('put')
                {{-- elegir el tipo de servicios --}}
                <div class="form-group">
                    <label>
                        Nombre
                        <input name="nombre" class="form-control" type="text" value="{{old('nombre', $servicio->nombre)}}">                   
                    </label>
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>
                        Planes
                        <select name="plan" class="form-control">
                            @foreach ($planes as $plan)
                                <option value="{{$plan->id}}">{{$plan->nombre}}</option>
                            @endforeach
                        </select>                   
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        Precio
                        <input name="precio" step="any" class="form-control" type="number" value="{{old('precio', $servicio->precio)}}">                   
                    </label>
                    @error('precio')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Actualizar Servicio</button>
                </div>
                
            </form>
        </div>
    </div>
    @endif

    @if ($tipo=='internet')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.servicios.update',[$tipo,$servicio->id])}}" method="post">
                @csrf
                @method('put')
                {{-- elegir el tipo de servicios --}}
                <div class="form-group">
                    <label>
                        Nombre
                        <input name="nombre" class="form-control" type="text" value="{{old('nombre', $servicio->nombre)}}">                   
                    </label>
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>
                        Velocidad
                        <input name="velocidad" class="form-control" type="number" value="{{old('velocidad', $servicio->velocidad)}}">                   
                    </label>
                    @error('velocidad')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>
                        Precio
                        <input name="precio" step="any" class="form-control" type="number" value="{{old('precio', $servicio->precio)}}">                   
                    </label>
                    @error('precio')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Actualizar Servicio</button>
                </div>
                
            </form>
        </div>
    </div>
    @endif

    @if ($tipo=='telefonia')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.servicios.update',[$tipo,$servicio->id])}}" method="post">
                @csrf
                @method('put')
                {{-- elegir el tipo de servicios --}}
                <div class="form-group">
                    <label>
                        Nombre
                        <input name="nombre" class="form-control" type="text" value="{{old('nombre', $servicio->nombre)}}">                   
                    </label>
                    @error('nombre')
                        <br>
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>
                        Minutos
                        <input name="minutos" class="form-control" type="number" value="{{old('minutos', $servicio->minutos)}}">                   
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        Precio
                        <input name="precio" step="any" class="form-control" type="number" value="{{old('precio', $servicio->precio)}}">                   
                    </label>
                    @error('precio')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Actualizar Servicio</button>
                </div>
                
            </form>
        </div>
    </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop