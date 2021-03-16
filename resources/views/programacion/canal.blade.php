<x-app-layout>
    <div class="card bg-gray-dark">
        <div class="card-header">
            <h2>{{$canal->nombre}}</h2>
        </div>
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Programa</td>
                        <td>Fecha</td>
                        <td>Hora</td>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($canal->programas as $programa)
                    <tr>
                        <td><a href="{{route('programacion.programa', $programa->id)}}">{{$programa->nombre}}</a></td>
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