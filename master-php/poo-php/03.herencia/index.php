<?php
require_once 'clases.php';
$persona=new Persona();
$informatico=new Informatico();

$persona->nombre="Mikel";
var_dump($persona);
var_dump($informatico);
$tecnico=new TecnicoRedes();
var_dump($tecnico);

?>

