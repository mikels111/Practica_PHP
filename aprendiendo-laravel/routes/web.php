<?php

use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;
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
    // return view('welcome');
    echo '<h1>Hola mundo</h1>';
});


Route::get('/peliculas/{pagina?}','PeliculaController@index');//@index es para que ejecute el método index dentro del controlador de 'pelicula'

// Route::get('/detalle','PeliculaController@detalle');
Route::get('/detalle/{year?}',[
    'middleware'=>'testyear',//El middleware es lo que va a hacer antes de que cargue la pagina (El middleware 'testyear' es creado)
    'uses'=>'PeliculaController@detalle',
    'as'=>'pelicula.detalle'
]); //--> 'as' es para ponerle un nombre a la ruta y 'uses' es su controlador 
Route::get('/redirigir','PeliculaController@redirigir');

Route::get('/formulario','PeliculaController@formulario');
Route::post('/recibir','PeliculaController@recibir');

Route::resource('/usuario','UsuarioController');
/*
Route::get('/mostrar-fecha', function () {
    $titulo = 'Esto es una vista';
    return view(
        'mostrarVista',
        array(
            'titulo' => $titulo
        )
    );
});

Route::get('/pelicula/{titulo}/{year?}', function ($titulo = 'No hay película seleccionada', $year = 2019) {
    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'

));


Route::get('/listado-peliculas', function ($titulo = 'Lista de películas') {
    $listado = array('Harry Potter', 'Harry el Sucio');
    return view('peliculas/listado')
        ->with('titulo', $titulo)
        ->with('listado',$listado);
    //el método "with" es lo mismo que pasarle un array en la función "view"
});

Route::get('/pagina',function(){
    return view('pagina');
});
*/