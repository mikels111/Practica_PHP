<?php
// Funciones predefinidas

// Debuggear
$nombre = "Mikel";
var_dump($nombre);

// Fechas
echo date('d-m-Y');

// Fecha en formato Unix
echo '<br>';
echo time();

// Matemáticas
echo '<br>';
echo 'Raiz cuadrada de 10=' . sqrt(10);

// Número aleatorio
echo '<br>';
echo  "Entre 10 y 40-->" . rand(10, 40); //Si no se indican los números saca un número aleatorio

// Número pi
echo '<br>';
echo 'Numero pi-->' . pi();

// Redondear
echo '<br>';
$num = 8.2459;
echo "Redondear $num -->" . round($num, 2); //El seguno parametro es para indicar los decimales que tendrá

// Mostrar e tipo de variable
echo '<br>';
echo gettype($num);

// Mostrar si una variable es de un tipo o de otro
echo '<br>';
if (!is_string($num)) {
    echo 'NO es un string';
}
echo '<br>';
if (is_float($num)) {
    echo 'Es un float';
}

// Si existe una variable
echo '<br>';
$edad = 0;
if (isset($edad)) {
    echo 'La variable existe';
} else {
    echo 'La variable no existe';
}

// Quitar los espacios en blanco
echo '<br>';
$frase = '  asdfsadfsdf   ';
trim($frase);

// Eliminar variables / indices
echo '<br>';
$year = 2021;
unset($year);

// Comprobar si una variable está vacía--> está vacía si un string no tiene caracteres ni espacios, si es null o si es false
echo '<br>';
$texto=false;
if(empty($texto)){
    echo 'la varible $texto está vacia';
}else{
    echo 'La variable $texto tiene contenido';
}