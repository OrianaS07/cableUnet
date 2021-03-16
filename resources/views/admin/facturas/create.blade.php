@extends('adminlte::page')

@section('title', 'cableUnet')

@section('content_header')
    <h1>Suscribir un Paquete - Mensual</h1>
@stop

@section('content')
    <div class="card bg-gray-dark">
        <div class="card-body">
            <form action="{{route('admin.facturas.store')}}" method="POST">
                @csrf
                {{-- elegir el tipo de servicios --}}
                <div class="form-group">
                    <label name="paquete">
                        Paquetes
                        <select name="paquete" class="form-control">
                            @foreach ($paquetes as $paquete)
                                <option value="{{$paquete->id}}">{{$paquete->nombre}}</option>
                            @endforeach
                        </select>                   
                    </label>
                </div>
                <div class="form-group">
                    <label name="mes">
                        Elija el mes a Suscribir el Paquete
                        <select name="mes" class="form-control">
                            @for ($i = 1; $i <= 12; $i++)
                                    @if ($i == 1)<option value="{{$i}}"> Enero </option>@endif
                                    @if ($i == 2)<option value="{{$i}}"> Febrero </option>@endif
                                    @if ($i == 3)<option value="{{$i}}"> Marzo </option>@endif
                                    @if ($i == 4)<option value="{{$i}}"> Abril </option>@endif
                                    @if ($i == 5)<option value="{{$i}}"> Mayo </option>@endif
                                    @if ($i == 6)<option value="{{$i}}"> Junio </option>@endif
                                    @if ($i == 7)<option value="{{$i}}"> Julio </option>@endif
                                    @if ($i == 8)<option value="{{$i}}"> Agosto </option>@endif
                                    @if ($i == 9)<option value="{{$i}}"> Septiembre </option>@endif
                                    @if ($i == 10)<option value="{{$i}}"> Octubre </option>@endif
                                    @if ($i == 11)<option value="{{$i}}"> Noviembre </option>@endif
                                    @if ($i == 12)<option value="{{$i}}"> Diciembre </option>@endif    
                            @endfor
                        </select>                   
                    </label>
                </div>
                
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Suscribir Paquete</button>
                </div>
            </form>
        </div>
    </div>
@stop

