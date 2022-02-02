<?php
include('includes/conexion.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // if (isset($_REQUEST['nombre']) and isset($_REQUEST['email']) and isset($_REQUEST['genero']) and isset($_REQUEST['experiencia']) and isset($_REQUEST['notificaciones']) and isset($_REQUEST['comentario'])) {
    // nombre,email, generos, experiencia, notificaciones, comentarios
    if (!empty($_REQUEST['email'])) {

        $nombre = filter($_REQUEST['nombre']);
        $email = filter_var(filter($_REQUEST['email']), FILTER_VALIDATE_EMAIL);
        #Todos los elementos en un string con comas
        $genero = !isset($_REQUEST['genero']) ? '' : implode(',', $_REQUEST['genero']);
        $experiencia =  !isset($_REQUEST['experiencia']) ? '' : $_REQUEST['experiencia'];
        $notificaciones = !isset($_REQUEST['notificaciones']) ? '' : implode(',', $_REQUEST['notificaciones']);
        $comentarios = !isset($_REQUEST['comentrario']) ? '' : filter($_REQUEST['comentario']);


        $sql = "INSERT INTO cartelera_usuario(nombre, email, generos_favoritos, experiencia, notificaciones,comentarios) VALUES('$nombre','$email','$genero', '$experiencia ','$notificaciones','$comentarios')";

        if ($conn->query($sql)) {
            header('Location: index.php?insert=' . true . '#contacto');
        } else {
            header('Location: index.php?insert=' . false . '#contacto');
        }
    } else {
        header('Location: index.php?insert=' . false  . '&email=' . false. '#contacto');
    }
}

function filter($variable)
{
    $variable = trim($variable);
    $variable = stripslashes($variable);
    $variable = htmlspecialchars($variable);
    return $variable;
}
