<h1>{{$titulo}}</h1>
<p>Acción index del controlador de pelicula</p>
@if(isset($pagina))
<h2>La pagina es {{$pagina}}</h2>
@endif

<a href="{{action('PeliculaController@detalle')}}">Detalle película</a>
<a href="{{route('pelicula.detalle',['id'=>12])}}">Detalle película</a>
{{-- Los dos enlaces nos llevan al mismo sitio pero se hacen de diferente manera (el paremetro no es obligatorio ponerlo) --}}