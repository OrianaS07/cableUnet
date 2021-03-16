
<x-app-layout>
@include('programacion.index')
    <div class="card bg-gray-dark">
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
        
        <div class="card-header">
            <h2 class="text-center">Programacion</h2>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Canal</td>
                        @for ($i=0; $i<48; $i++)
                            <td> 
                            {{$horas[$i]}}
                            </td>
                        @endfor
                    </tr>
                </thead>
                
                {{--Mostrar la programacion--}} 
                <tbody>
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
                </tbody>
                
                

            </table>

        </div>
        



    </div>
</x-app-layout>
