@extends('layouts.master')

<h2>Detalle pelicula</h2>
<a href="{{action([App\Http\Controllers\PeliculaController::class, 'index'],['pagina'=>3])}}">Listado</a>