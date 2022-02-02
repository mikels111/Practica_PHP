<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/fecha', function () {
//     $titulo=array(
//         'titulo'=>"Desde rutas de web"
//     );
//     return view('mostrarVista',$titulo);
// });


// Route::get('/pelicula/{titulo?}', function ($titulo='No hay pelicula') {
//     $pelicula = array(
//         'titulo'=>$titulo,
//         'year'=>'2006'
//     );
//     return view('peliculas.pelicula',$pelicula);
// });
// Route::get('/peliculas',function (){
//     $titulo='Listado de películas';
//     $listado=array('El laberinto del fauno','El planeta de los simios','Vidas Cruzadas');
//     return view('peliculas.listado')
//     ->with('titulo', $titulo)
//     ->with('listado',$listado);
// });
Route::get('/pagina',function(){
    return view('pagina');
});
Route::get('/peliculas/{pagina?}',[PeliculaController::class, 'index']);
Route::get('/detalle',[PeliculaController::class, 'detalle']);
Route::get('/usuario',[UsuarioController::class,'index'])->name('usuario');

