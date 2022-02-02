<?php

require_once 'autoload.php';

use MisClases\Usuario;
use MisClases\Categoria;
use Paquete2\Usuario as Usuario2;

class Principal {

    public $usuario;
    public $categoria;

    public function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    public function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }

}

$usuario = new Usuario2(); //con el alias
var_dump($usuario);

$principal = new Principal();
var_dump($principal->usuario);
