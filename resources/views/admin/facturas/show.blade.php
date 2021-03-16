@extends('adminlte::page')

@section('title', 'cableUnet')

@section('content_header')
    <h1>cableUnet</h1>
@stop

@section('content')
    
    <div class="card">
        <div class="card-body">
            <table>
                <thead>
                    <tr>
                        <th colspan="2">
                            @if ($factura->mes == 1)<h1 class="text-center">Factura del mes de Enero</h1>@endif
                            @if ($factura->mes == 2)<h1>Factura del mes de Febrero</h1>@endif
                            @if ($factura->mes == 3)<h1>Factura del mes de Marzo</h1>@endif
                            @if ($factura->mes == 4)<h1>Factura del mes de Abril</h1>@endif
                            @if ($factura->mes == 5)<h1>Factura del mes de Mayo</h1>@endif
                            @if ($factura->mes == 6)<h1>Factura del mes de Junio</h1>@endif
                            @if ($factura->mes == 7)<h1>Factura del mes de Julio</h1>@endif
                            @if ($factura->mes == 8)<h1>Factura del mes de Agosto</h1>@endif
                            @if ($factura->mes == 9)<h1>Factura del mes de Septiembre</h1>@endif
                            @if ($factura->mes == 10)<h1>Factura del mes de Octubre</h1>@endif
                            @if ($factura->mes == 11)<h1>Factura del mes de Noviembre</h1>@endif
                            @if ($factura->mes == 12)<h1>Factura del mes de Diciembre</h1>@endif
                        </th>
                    </tr>
                </thead>
                @php
                    $paquete = $paquetes->find($factura->paquete_id);
                    $paqueNombre = $paquete->nombre;
                    $internet = $internets->find($paquete->internet_id);
                    $cable = $cables->find($paquete->cable_id);
                    $telefonia = $telefonias->find($paquete->telefonia_id);
                    $total = ($internet->precio)+($cable->precio)+($telefonia->precio);
                @endphp
                <tbody>
                    <tr>
                        <th>Descripcion</th>
                        <th>Precio</th>
                    </tr>
                    
                        @if ($internet)
                            <tr>
                                <td>Servicio de Internet: {{$internet->nombre}}</td>
                                <td>{{$internet->precio}}</td>                        
                            </tr>
                        @endif
                            
                        @if ($cable)
                            <tr>
                                <td>Servicio de Cable: {{$cable->nombre}}</td>
                                <td>{{$cable->precio}}</td>                        
                            </tr>
                        @endif

                        @if ($telefonia)
                            <tr>
                                <td>Servicio de Cable: {{$telefonia->nombre}}</td>
                                <td>{{$telefonia->precio}}</td>                        
                            </tr>
                        @endif

                        <tr>
                            <th>TOTAL</th>
                            <th>{{$total}}</th>                        
                        </tr>
                </tbody>
            

            </table>
                         
            
        </div>
    </div>
@stop
