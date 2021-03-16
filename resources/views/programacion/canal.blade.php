<x-app-layout>
    <div class="container bg-red-500">
        <h2>{{$canal->nombre}}</h2>

        <table>
            <tr>
                <td>Programa</td>
                <td>Fecha</td>
                <td>Hora</td>
            </tr>

            @foreach ($canal->programas as $programa)
            <tr>
                <td><a href="{{route('programacion.programa', $programa->id)}}">{{$programa->nombre}}</a></td>
                <td>{{$programa->fecha}}</td>
                <td>{{$programa->hora}}</td>
            </tr>
            @endforeach
        </table>

        <a href="{{route('programacion.mostrar')}}" class="btn btn-primary">Volver</a>
    </div>
</x-app-layout>