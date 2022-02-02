<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Almacenar  y persistir datos del usuario mientras que navega en un sitio web hasta que cierra sesion o cierra el navegador

        // iniciar la sesion
        session_start();

        // Variable local
        $variable= 'soy una cadena de texto';
        
        // variable se sesion
        $_SESSION['variable_persistente']= "hola soy una sesion activa";

        echo $variable."</br>";
        echo $_SESSION['variable_persistente'];

    ?>
</body>
</html>