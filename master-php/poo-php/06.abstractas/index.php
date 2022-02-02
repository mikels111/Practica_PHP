<?php
abstract class Ordenador{
    public $encendido;

    abstract public function encender();
    // En las clases abstractas las funciones abstractas sólo se definen, luego en la clase que la hereda se indica la 
    //funcionalidad que tiene esa función.
    public function apagar()
    {
        $this->encendido=false;
    }
}
class Pc extends Ordenador{

    public $software;

    public function arrancarSoftware()
    {
        $this->software=true;
    }

    public function encender()
    {
        $this->encendido=true;
    }
}
$ordenador = new Pc();
$ordenador->arrancarSoftware();
$ordenador->encender();
var_dump($ordenador);