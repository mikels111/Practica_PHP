<?php
// para mostrar el valor de los cookies, tengo que usar $_COOKIE, 
// una variable superglobal, es un array asociativo
if (isset($_COOKIE['micookie'])) {
    echo '<h1>' . $_COOKIE['micookie'] . '</h1>';
} else {
    echo "no existe la cookie";
}

if (isset($_COOKIE['year'])) {
    echo '<h1>' . $_COOKIE['year'] . '</h1>';
}else{
    echo 'no existe la cookie';
}
?>
<a href="index.php">Crearc galletas</a>
<a href="borrar_cookies.php">Borrar galletas</a>
