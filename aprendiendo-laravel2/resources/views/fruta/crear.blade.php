<?php
use App\Http\Controllers\FrutaController;
?>
@if (isset($fruta) && is_object($fruta))
    <h1>Editar Fruta</h1>
@else
    <h1>Crear Fruta</h1>
@endif

<form action="{{
    isset($fruta) ? action([FrutaController::class, 'update'],['fruta'=>$fruta->id]) :
    action([FrutaController::class, 'save'])
}}" 
method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" id="id" value="3">
    <div>
        <label for='nombre'>Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{isset($fruta->nombre) ? $fruta->nombre : ''}}">
    </div>
    <br/>
    <div>
        <label for='descripcion'>Descripción</label>
        <input type="text" name="descripcion" id="descripcion" value="{{isset($fruta->descripcion) ? $fruta->descripcion : ''}}">
    </div>
    <br/>
    <div>    
        <label for='precio'>Precio</label>
        <input type="number" name="precio" id="precio" value="{{isset($fruta->precio) ? $fruta->precio : ''}}">
        
        <input type="submit" value="Guardar">
    </div>

</form>