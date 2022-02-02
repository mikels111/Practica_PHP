<?php session_start();
if (!isset($_SESSION["ip"])) {
    /* desviamos a la página de error sesion */
    header("location:caducada.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/inc_config.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>
</head>

<body>
    <?php include("includes/inc_cabecera.php"); ?>
    <div id="main_container">
        <main>
            <?php
            $color1 = "class='apagado'";
            $color2 = "class='apagado'";
            $color3 = "class='encendido'";
            include("includes/inc_panel_sesiones.php");

            if (isset($_POST['direccion']) && isset($_POST['codpostal'])) {
                $_SESSION['direccion'] = $_POST['direccion'];
                $_SESSION['codpostal'] = $_POST['codpostal'];
            }


            // if (isset($_SESSION['direccion']) && isset($_SESSION['codpostal']) && isset($_SESSION['nombre']) && isset($_SESSION['apellido'])) {
                echo "<br>" . $_SESSION['nombre'] . "<br>" . $_SESSION['apellido'] . "<br>" . $_SESSION['direccion'] . "<br>" . $_SESSION['codpostal'];
            // }

            ?>
            <form method="">
                <button type="submit" class="btn_sig_conf confirm">Confirmar</button>

            </form><a href="sesiones2.php"><button class="btn_sig_conf">
                    <-- Atras</button> </a> <a href="cerrarSesion.php"><button>Cerrar Session</button></a>

        </main>


    </div>
</body>

</html>