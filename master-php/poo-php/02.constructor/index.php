<?php
require_once 'coche.php';
$coche=new Coche('verde','Fiesta','Ford',300,5,130);
var_dump($coche);
// echo $coche->marca; 
// echo $coche->modelo;
// echo $coche->getModelo();
echo $coche->getInformacion($coche);?>
