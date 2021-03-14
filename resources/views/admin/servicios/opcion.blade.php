@extends('adminlte::page')

@section('title', 'cableUnet')

@section('content_header')
    <h1>Crear Nuevo Servicio</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.servicios.created')}}" method="POST">
                @csrf
                {{-- elegir el tipo de servicios --}}
                <div class="form-group">
                    <label name='tipo'>
                        <div>
                            <h3>Elige el Tipo de Servicio a Crear</h3>
                        </div>
                        <select name="tipo" class="form-control">
                            <option value="internet">Internet</option>
                            <option value="cable">Cable</option>
                            <option value="telefonia">Telefonia</option>
                        </select>                        
                    </label>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Enviar Opción</button>
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