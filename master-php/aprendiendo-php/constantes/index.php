<?php
/*
Constantes
Es un contenedor de información que no puede variar
*/
define('nombre', 'Mikel Seara');
define('web', 'mikelseara.es');


echo nombre; // Para mostrar las constantes no hay que poner el dolar

// Constantes predefinidas
echo PHP_VERSION;
echo PHP_EXTENSION_DIR;
echo __LINE__;
echo __FILE__;
function funcion()
{
    echo __FUNCTION__;
}
funcion();
