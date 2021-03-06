<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-900">Paquete Nº {{$paquete->id}} : {{$paquete->nombre}}</h1>
    </div class="container py-8">
    <div>
        <h3 class="text-3xl font-bold text-gray-900 text-center">Servicios que Contiene</h3>
    </div>
    <div class="grid grid-cols-3 container gap-6">
        {{-- servicios que lo componen --}}
        @if ($paquete->internet_id)
            <div class="w-full h-full px-8 flex flex-col justify-center bg-gray-500 m-4">
                <h3 class="text-2xl font-bold text-white text-center">Servicio de Internet</h3>
                <p class="text-2xl text-gray-900 text-left"><strong>Nombre: </strong>{{$internets->find($paquete->internet_id)->nombre}}</p>
                <p class="text-2xl text-gray-900 text-left"><strong>Precio: </strong>{{$internets->find($paquete->internet_id)->precio}}</p>
            </div>
        @endif
        @if ($paquete->cable_id)
        <div class="w-full h-full px-8 flex flex-col justify-center bg-gray-500 m-4">
            <h3 class="text-2xl font-bold text-white text-center">Servicio de Cable</h3>
            <p class="text-2xl text-gray-900 text-left"><strong>Nombre: </strong>{{$cables->find($paquete->cable_id)->nombre}}</p>
            <p class="text-2xl text-gray-900 text-left"><strong>Precio: </strong>{{$cables->find($paquete->cable_id)->precio}}</p>
        </div>
        @endif
        @if ($paquete->telefonia_id)
        <div class="w-full h-full px-8 flex flex-col justify-center bg-gray-500 m-4">
            <h3 class="text-2xl font-bold text-white text-center">Servicio de Telefonia</h3>
            <p class="text-2xl text-gray-900 text-left"><strong>Nombre: </strong>{{$telefonias->find($paquete->telefonia_id)->nombre}}</p>
            <p class="text-2xl text-gray-900 text-left"><strong>Precio: </strong>{{$telefonias->find($paquete->telefonia_id)->precio}}</p>
        </div>
        @endif
    </div>
</x-app-layout>