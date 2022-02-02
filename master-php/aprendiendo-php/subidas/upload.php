<?php
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];
if($tipo=="image/jpg" || $tipo=='image/jpeg'|| $tipo=='image/png'|| $tipo=='image/gif'){
    if(!is_dir('images')){
        mkdir('images',0777);
    }
    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
    echo '<h1>Imagen subida correctamente<h1>';
}else{
    header('Refresh: 3; URL=index.php');
    echo "El tipo de archivo no es correcto";
}