<?php
include('../includes/conexion.php');

$titulo = $_REQUEST['titulo'];
$genero = $_REQUEST['genero'];
$duracion = $_REQUEST['duracion'];
$clasificacion = $_REQUEST['clasificacion'];
$estado = $_REQUEST['estado'] == '' ? 'A' : $_REQUEST['estado'];
$fecha_estreno = $_REQUEST['fecha_estreno'] == '' ? '9999-01-01' : $_REQUEST['fecha_estreno'];
$poster = $_REQUEST['poster'];
$sql = "INSERT INTO pelicula(titulo,genero,duracion,fecha_estreno,poster,clasificacion,estado) VALUES('$titulo','$genero',$duracion,'$fecha_estreno','$poster','$clasificacion','$estado')";

if ($conn->query($sql)) {
    header('Location: lista_peliculas.php?insert=' . true);
} else {
    header('Location: lista_peliculas.php?insert=' . false);
}
