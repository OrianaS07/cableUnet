<x-app-layout>  
    @include('programacion.index')
    
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

       
        <div class="container shadow-xs rounded-md bg-gray-100">
            <h2 class="text-center text-gray-600 m-4 text-5xl font-extrabold">PROGRAMACIÓN</h2>
        </div>

        <div class=" container overflow-auto">
            <table class="table border-collapse border-2 border-gray-100">
                <thead>
                    <tr class="text-2xl">
                        <th>Canal</th>
                        @for ($i=0; $i<48; $i++)
                            <th> 
                            {{$horas[$i]}}
                            </th>
                        @endfor
                    </tr>
                </thead>
                
                {{--Mostrar la programacion--}} 
                <tbody>
                    @foreach ($canales as $canal)
                    <tr class="text-2xl">
                        <td><a href="{{route('programacion.canal', $canal->id)}}">{{$canal->nombre}}</a></td>
                        
                        @foreach ($canal->programas as $programa)
                        
                            @if ($programa->fecha==$fecha)
                                @for ($i=0; $i<48; $i++)
                                    @if (explode(':', $programa->hora)[0] == explode(':', $horas[$i])[0])
                                        <td ><a href="{{route('programacion.programa', $programa->id)}}">{{$programa->nombre}}</a></td>
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
   

</x-app-layout>
