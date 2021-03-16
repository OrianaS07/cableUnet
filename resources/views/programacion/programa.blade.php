<x-app-layout>
    <div class="card bg-gray-dark">
        <div class="card-header">
            <h2>{{$programa->nombre}}</h2>
            <p>{{$programa->informacion}}</p>
        </div>
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Canal</td>
                        <td>Fecha</td>
                        <td>Hora</td>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($programa->canales as $canal)
                    <tr>
                        <td><a href="{{route('programacion.canal', $canal->id)}}">{{$canal->nombre}}</a></td>
                        <td>{{$programa->fecha}}</td>
                        <td>{{$programa->hora}}</td>
                    </tr>
                    @endforeach
                </tbody>
               
            </table>

            <a href="{{route('programacion.mostrar')}}" class="btn btn-primary">Volver</a>
        </div>
        
    </div>
</x-app-layout>