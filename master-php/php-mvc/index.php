<?php
require_once 'autoload.php';
// require_once 'vendor/autoload.php';
// phpinfo();
if(isset($_GET['controller'])){
    $_GET['controller'];
}

if (isset($_GET['controller']) && class_exists($_GET['controller']. 'Controller')) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
    $controlador = new $nombre_controlador();
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    }
}




    
