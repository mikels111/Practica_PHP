<?php
// Crear directorio
if (!is_dir('mi_carpeta')) {
    mkdir('mi_carpeta', 0777) or die('no se puede crear la carpeta');
} else {
    echo 'Ya existe la carpeta';
}

// eliminar directorio

// if (is_dir('mi_carpeta')) {
//     rmdir('mi_carpeta');
// }

// recorrer contenido del directorio (También mostrará '.' y '..')
echo '<br><h3>Contenido del directorio mi_carpeta</h3>';
if ($gestor = opendir('./mi_carpeta')) {
    while (($archivo = readdir($gestor)) != false) {
        echo "$archivo <br>";
    }
}
