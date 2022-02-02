<?php 
// Es un fichero que se almacena en el ordenador del usuario que visita la web , con el fin de recordar o rastrear el comportamiento del mismo en la web

setcookie('micookie','valor de mi galleta');

// Cookie con expiración de un año
setcookie('year', 'valor de cookie de 365 dias', time()+(60*60*24*365));
header('Location: ver_cookies.php');
?>
<a href="ver_cookies.php">ver galletas</a>
<a href="borrar_cookies.php">Borrar galletas</a>
