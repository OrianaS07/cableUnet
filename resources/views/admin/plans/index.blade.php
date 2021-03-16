@extends('adminlte::page')

@section('title', 'cableUnet')

@section('content_header')
    @can('admin.plans.create')
        <a class="btn btn-primary float-right" href="{{route('admin.plans.create')}}">Nuevo Plan</a>
    @endcan
    <h1>Listado de Planes</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card bg-gray-dark">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                        <tr>
                            <td>{{$plan->id}}</td>
                            <td>{{$plan->nombre}}</td>
                            <td width="10px">
                                @can('admin.plans.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.plans.edit',$plan)}}">Editar</a>
                                @endcan                                
                            </td>
                            <td width="10px">
                                @can('admin.plans.destroy')
                                    <form action="{{route('admin.plans.destroy',$plan)}}" method="POST">
                                        @method('DELETE') 
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
