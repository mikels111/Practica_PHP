<?php

$conexion = mysqli_connect("localhost", 'root', '', 'phpmysql');
if (mysqli_connect_errno()) {
    echo 'La conexion a la base de datos ha fallado' . mysqli_connect_errno();
} else {
    echo 'Conexion realizada con exito';
}

// Consulta para configurar la codificación de caracteres
mysqli_query($conexion, 'SET NAMES "utf8"');


// consulta select
$notas = mysqli_query($conexion, 'SELECT * FROM NOTAS');

while($row = mysqli_fetch_assoc($notas)){
    echo '<br>';
    echo "<h1>".$row['titulo']."</h1>";
    
    echo "-".$row['descripcion'];
}
echo '<br>';
// Insertar en la base de datos desde php
$sql = "INSERT INTO notas VALUES(null,'nota desde php','nota prueba','brown')";
$insert= mysqli_query($conexion,$sql);
if($insert){
    echo 'fila insertada';
}else{
    echo "Error".mysqli_error($conexion);
}
