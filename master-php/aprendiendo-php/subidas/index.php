<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <!-- hay que ponerle enctype-->
        <input type="file" name="archivo" id="subir">
        <input type="submit" value="Enviar">
    </form>
    <h2>Listado de imagenes</h2>
    <?php
    $gestor = opendir('./images');
    if ($gestor) :
        while (($image = readdir($gestor)) !== false) :
            if ($image != '.' and $image != '..'):
                echo "<img src='images/$image' width='200px'></img><br>";
            endif;
        endwhile;
    endif;
    ?>
</body>

</html>