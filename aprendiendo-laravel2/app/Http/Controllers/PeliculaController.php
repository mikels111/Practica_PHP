<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($pagina=1){
        return view('pelicula.index',['titulo'=>'titulo del index','pagina'=>$pagina]);
    }
    
    public function detalle($year=null){
        return view('pelicula.detalle');
    }
    public function redirigir(){
        return redirect()->route('detalle');
    }
    public function formulario(){
        return view('pelicula.formulario');
    }
    public function recibir(Request $request){
        $nombre = $request-> input('nombre');
        $email = $request-> input('email');
        var_dump($nombre);
    }
}
