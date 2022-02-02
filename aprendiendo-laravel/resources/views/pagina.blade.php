@extends('layouts.master')

@section('titulo','Página') {{--El primer argumento es el nombre que tiene en la plantilla y el segundo lo que quieres que se muestre--}}

@section('header') {{-- Si esta section se llama igual que la que está en la plantilla que se hereda se sustituie su contenido --}}
@parent(){{-- @parent() es para heredar lo que tiene la "section" de la plantilla --}}
<h1>Cabecera en la view página</h1>
@stop

@section('content'){{-- El string que se le pasa tiene que ser el mismo que en la plantilla --}}
    <h1>Página</h1>
@stop
