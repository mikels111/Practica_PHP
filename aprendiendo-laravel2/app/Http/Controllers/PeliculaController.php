<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($pagina=1){
        return view('pelicula.index',['titulo'=>'titulo del index','pagina'=>$pagina]);
    }
    public function detalle(){
        return view('pelicula.detalle');
    }
}
