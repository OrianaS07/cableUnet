
<x-app-layout>
@include('programacion.index')
    <div class="container bg-red-500">
        {{--Hora de la programacion--}}
        @php
            for ($i=0; $i<48; $i++){
                $horas[$i]=(string)((int)($i/2));

                if ($i%2 == 0){
                    $horas[$i].=":00";
                }else{
                    $horas[$i].=":30";
                }
            }
        @endphp

        <table>

            <tr>
                <td>Canal</td>
                @for ($i=0; $i<48; $i++)
                    <td> 
                       {{$horas[$i]}}
                    </td>
                @endfor
            </tr>

            {{--Mostrar la programacion--}} 
            @foreach ($canales as $canal)
            <tr>
                <td><a href="{{route('programacion.canal', $canal->id)}}">{{$canal->nombre}}</a></td>
                
                @foreach ($canal->programas as $programa)
                   
                    @if ($programa->fecha==$fecha)
                        @for ($i=0; $i<48; $i++)
                            @if (explode(':', $programa->hora)[0] == explode(':', $horas[$i])[0])
                                <td><a href="{{route('programacion.programa', $programa->id)}}">{{$programa->nombre}}</a></td>
                                @else
                                    <td> </td>
                            @endif
                        @endfor
                    @endif
                    
                @endforeach
                
            </tr>
            @endforeach

        </table>




    </div>
</x-app-layout>
