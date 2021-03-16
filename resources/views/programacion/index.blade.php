<x-app-layout>

    <div class="container bg-red-500">
        <form action="{{route('programacion.mostrar')}}" method="GET">
            <input type="date" value="{{date("Y-m-d")}}" name="fecha"></input>
            <button type="submit">Enviar</button>
        </form>
    </div>
</x-app-layout>
