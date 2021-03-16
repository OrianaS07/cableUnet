<x-app-layout>
    <div class="container bg-red-500">
        <h2>{{$programa->nombre}}</h2>

        <p>{{$programa->informacion}}</p>

        <table>
            <tr>
                <td>Canal</td>
                <td>Fecha</td>
                <td>Hora</td>
            </tr>

            @foreach ($programa->canales as $canal)
            <tr>
                <td><a href="{{route('programacion.canal', $canal->id)}}">{{$canal->nombre}}</a></td>
                <td>{{$programa->fecha}}</td>
                <td>{{$programa->hora}}</td>
            </tr>
            @endforeach
        
        </table>

        <a href="{{route('programacion.canal')}}" class="btn btn-primary">Volver</a>
    </div>
</x-app-layout>