<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('includes/inc_head.php') ?>
</head>

<body>
    <?php include('includes/inc_nav.php') ?>
    <div class="ms-main">
        <div class="ms-content">
            <div id="ms-form-login">
                <?php include('includes/inc_login.php'); 
                if(isset($_REQUEST['login'])){
                    echo "<p style='color:red;'>Usuario incorrecto</p>";
                }
                ?>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy;Mikel Seara | Proyecto Desarrollo Web</p>
    </footer>
</body>

</html>