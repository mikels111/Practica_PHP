<?php
require_once 'configuracion.php';
ConfiguracionStatic::setColor('amarillo');
echo ConfiguracionStatic::$color;

echo '<br>';
//También se pueden crear objetos de esa clase, y para acceder a las propiedades estaticas hay que utilizar ::
$configuracion=new ConfiguracionStatic();
$configuracion::$color='verde';
echo $configuracion::$color;
var_dump($configuracion);