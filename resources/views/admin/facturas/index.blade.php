@extends('adminlte::page')

@section('title', 'cableUnet')

@section('content_header')
    <h1>FACTURAS</h1>
@stop

@section('content')
    @livewire('admin.facturas-index')
@stop
