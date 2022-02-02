<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
 
class PeliculaController extends Controller
{
    public function index($pagina=1){
        $titulo = 'Listado de la peliculas';
        return view('pelicula.index',['titulo'=>$titulo,'pagina'=>$pagina]);
    }

    public function detalle($year=null){
        return view('pelicula.detalle');
    }
    public function redirigir(){
        // return redirect()->action('PeliculaController@detalle');
        // return redirect('/peliculas');
        return redirect()->route('pelicula.detalle');
    }

    public function formulario(){
        return view('pelicula.formulario');
    }
    public function recibir(Request $request){
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        return "El email es $email y el nombre es $nombre";
    }
}
