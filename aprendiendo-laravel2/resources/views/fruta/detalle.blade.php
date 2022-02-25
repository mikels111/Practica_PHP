<h1>Detalle fruta</h1>

<h4>
    {{$fruta->nombre}}
</h4>
<h4>
    {{$fruta->descripcion}}
</h4>
<h4>
    {{$fruta->precio}} 
</h4>
<a href="{{action([App\Http\Controllers\FrutaController::class, 'delete'],['fruta'=>$fruta->id])}}">Eliminar</a>
<a href="{{action([App\Http\Controllers\FrutaController::class, 'edit'],['fruta'=>$fruta->id])}}">Editar</a>