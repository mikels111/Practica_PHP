<?php
try {
    include("conexion.php");
    foreach($mbd->query('SELECT * from conexion') as $fila) {
        print_r($fila);
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>