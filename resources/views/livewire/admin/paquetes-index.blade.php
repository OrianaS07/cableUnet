<div class="card">

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paquetes as $paquete)
                    <tr>
                        <td>{{$paquete->id}}</td>
                        <td>{{$paquete->nombre}}</td>
                        <td>{{$paquete->precio}}</td>
                        <td width="10px">
                            @can('admin.paquetes.edit')
                                <a class="btn btn-primary btn-sm"  href="{{route('admin.paquetes.edit',$paquete)}}">Editar</a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('admin.paquetes.destroy')
                                <form action="{{route('admin.paquetes.destroy',$paquete)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm "  type="submit">Eliminar</button>
                                </form>
                            @endcan
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
