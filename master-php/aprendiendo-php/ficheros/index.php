<?php

// // abrir archivo
// $archivo = fopen('texto.txt', 'a+');// <-- el segundo parametro son los permisos

// // leer contenido del archivo(solo lee la primera linea)
// $contenido = fgets($archivo);
// echo $contenido;

// // Leer todo el contenido del archivo
// while (!feof($archivo)) {
//     $contenido = fgets($archivo);
//     echo $contenido;
// }

// // escribir dentro del archivo
// fwrite($archivo, 'Soy un texto metido desde php');

// // cerrar archivo
// fclose($archivo);

// Copiar archivo
// copy('texto.txt','fichero_copiado.txt') or die('Error al copiar'); //or die es para cuando de error.

// // Renombrar
// rename('fichero_copiado.txt','fichero_renombrado.txt');

// Eliminar
// unlink('fichero_renombrado.txt') or die('Error al borrar');

// Comprobar si un fichero existe
if(file_exists("texto.txt")){
    echo "el fichero existe";
}else{
    echo "No existe";
}