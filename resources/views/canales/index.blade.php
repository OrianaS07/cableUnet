<x-app-layout>
    <div class="container bg-red-500">
        <div id="programacion">
            <table>
                @foreach ($canales as $canal)
                   @foreach ($canal->programas as $programa)
                       {{getType($programa->fecha)}}
                   @endforeach
                @endforeach
            
            </table>

        </div>
    </div>
</x-app-layout>
