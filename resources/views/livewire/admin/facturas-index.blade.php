<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>PAQUETE</th>
                    <th>AÑO</th>
                    <th>MES</th>
                    <th></th>
                </tr>
                
            </thead>
            <tbody>
                @foreach ($facturas as $factura)
                     <tr>
                         <td>{{$paquetes->find($factura->paquete_id)->nombre}}</td>
                         <td>{{$factura->year}}</td>
                         @if ($factura->mes == 1)<td>Enero</td>@endif
                         @if ($factura->mes == 2)<td>Febrero</td>@endif
                         @if ($factura->mes == 3)<td>Marzo</td>@endif
                         @if ($factura->mes == 4)<td>Abril</td>@endif
                         @if ($factura->mes == 5)<td>Mayo</td>@endif
                         @if ($factura->mes == 6)<td>Junio</td>@endif
                         @if ($factura->mes == 7)<td>Julio</td>@endif
                         @if ($factura->mes == 8)<td>Agosto</td>@endif
                         @if ($factura->mes == 9)<td>Septembre</td>@endif
                         @if ($factura->mes == 10)<td>Octubre</td>@endif
                         @if ($factura->mes == 11)<td>Noviembre</td>@endif
                         @if ($factura->mes == 12)<td>Diciembre</td>@endif
                         <td with="10px">
                             <a href="{{route('admin.facturas.show',$factura)}}" class="btn btn-primary">Detalles</a>
                         </td>
                     </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{$facturas->links()}}
    </div>
</div>
