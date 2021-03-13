<x-app-layout>
    <div class="container bg-red-500">
        <div id="programacion">
            <table>
                @foreach ($canales as $canal)
                    <tr>
                        <td>
                            {{$canal->programas}}
                        </td>
                    </tr>
                    
                @endforeach
            
            </table>

        </div>
    </div>
</x-app-layout>
