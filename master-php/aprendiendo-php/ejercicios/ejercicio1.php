<?php
/*
Crear una sesion que aumente su valor en uno o disminuya en uno 
en función de si el parametro get counter está a uno o a cero
*/
session_start();
$cont = $_GET['cont'];
if (!isset($_SESSION['contador']))
    $_SESSION['contador'] = 0;

if ($cont == 1)
    $_SESSION['contador']++;
else if ($cont == 0)
    $_SESSION['contador']--;

print_r($_SESSION['contador']);
?>
<a href='ejercicio1.php?cont=1'>Incrementar</a>
<a href='ejercicio1.php?cont=0'>Decrementar</a>