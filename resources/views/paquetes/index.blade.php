<x-app-layout>
    <div class="container py-8">
        <h1 class="text-5xl text-black leading-8 font-bold py-8 text-center">PAQUETES DISPONIBLES</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            @foreach ($paquetes as $paquete)
                <article class="w-full h-60 bg-cover bg-center bg-red-500">
                    <div class="w-full h-full px-8 flex flex-col justify-center ">
                        <h1 class="text-4xl text-white leading-8 font-bold">
                            <a href="{{route('paquetes.show',$paquete)}}">{{$paquete->nombre}}</a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-app-layout>