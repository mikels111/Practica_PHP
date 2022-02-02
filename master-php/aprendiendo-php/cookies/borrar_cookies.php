<?php
if (isset($_COOKIE['micookie'])) {
    unset($_COOKIE['micookie']);
    // Para borrar un cookie hay que caducarla, si al time() le restamos cualquier numero significa que está caducada
    setcookie('micookie','', time()-100);
}
header('Location: ver_cookies.php');
