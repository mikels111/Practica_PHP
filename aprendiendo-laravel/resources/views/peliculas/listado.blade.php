@include('includes/header')
<h2><?=$titulo?></h2><!-- Muestra el valor de la variable en la plantilla-->
<h2>{{$titulo}}</h2>
{{-- <h2></h2>--}}<!-- Comentarios-->
<?php
echo "<h1>$titulo</h1>";
foreach ($listado as $key) {
    echo "<h2>-$key</h2>";
}
?>

<?php
echo isset($titulo)? "hay titulo": 'No hay titulo';
// operador ternario en PHP
 echo "<br>";
?>
{{isset($titulo)? 'hay titulo':'no hay titulo'}} <!-- Operador ternario en Blade-->

{{-- Condicionales en Blade --}}
@if($titulo)
    <h2>El titulo es {{ $titulo }}</h2>
@else
    <h2>El titulo no existe</h2>
@endif

@if($titulo && count($listado)>=2 )
    <h2>El titulo es "{{ $titulo }}" y hay 2 o más peliculas</h2>
@else
    <h2>Hay menos de 2 peliculas</h2>
@endif

{{-- Bucles --}}
@for($i=1; $i<=10; $i++)
    El numero es {{$i}}|
@endfor
<br>
<?php $contador=1;?>

@while($contador<10)
    {{$contador}}
    <?php $contador++;?>
@endwhile

<h2>Lista de peliculas con Blade</h2>
@foreach($listado as $peli)
    {{$peli}}<br>
@endforeach


@include('includes/footer')