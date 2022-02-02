<?php
/*
Tipos de datos:

Entero (int / integer)=99
Coma flotante, decimales(float/double)=3.45
Cadenas (string)= "hola mundo"
Booleano (bool) = true o false(si un booleano es true y le hacemos echo muestra 1 y si es false no muestra nada )
Array(coleccion de datos)
Null(no es un tipo de dato)
Objetos
*/


$numero = 100;
$texto = "soy un texto $numero"; // Se puede concatenar una variable con comillas dobles
echo $texto;
echo gettype($numero);

// Debugear
var_dump($numero);
