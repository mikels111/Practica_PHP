<?php
class Usuario{
    const URL_COMPLETA='http://localhost';
    public $email;
    public $password;
}

$usuario=new Usuario();
echo $usuario::URL_COMPLETA;//Se puede acceder directamente desde la variable
echo '<br>';
echo Usuario::URL_COMPLETA;//A las constantes se accede igual que las estaticas
var_dump($usuario);