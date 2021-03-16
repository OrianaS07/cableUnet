@extends('adminlte::page')

@section('title', 'cableUnet')

@section('content_header')
    <h1>Crear Plan</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card bg-gray-dark">
        <div class="card-body">

            {!! Form::open(['route'=>'admin.plans.store','autocomplete' =>'off']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre: ',) !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre del plan']) !!}
                @error('nombre')
                    <small class="text-danger">{{$message}}</small>
                    <br>
                @enderror
            </div>
            
            <div class="form-group">
                <p class="font-weight-bold">Lista de Canales Disponibles</p>
                @foreach ($canales as $canal)
                    <label class="mr-2">
                        {!! Form::checkbox('canales[]', $canal->id, null) !!}
                        {{$canal->nombre}}
                    </label>
                    <br>
                @endforeach
                @error('canales')
                    <small class="text-danger">{{$message}}</small>
                    <br>
                @enderror
            </div>

            <div>
                {!! Form::submit('Crear Plan', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
            
        </div>
    </div>    
@stop

