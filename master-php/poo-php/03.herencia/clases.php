<?php
class Persona{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function getNombre(){
        return $this->nombre;
    }

    public function hablar(){
        return "Estoy hablando";
    }
    public function caminar(){
        return "Estoy caminando";
    }
}

class Informatico extends Persona{
    public $lenguajes;
    public $experienciaProgramador;

    public function __construct()
    {
        $this->lenguajes='JAVA, PYTHON y JAVASCRIPT';
        $this->experienciaProgramador=10;
    }
    public function getLenguajes(){
        return $this->lenguajes;
    }
    public function programar(){
        return $this->nombre;
    }
    public function hacerOfimatica(){
        return $this->nombre;
    }
    public function repararOrdenador(){
        return $this->nombre;
    }
}

class TecnicoRedes extends Informatico{
    public $auditarRedes;
    public $experienciaRedes;

    public function __construct()
    {
        parent::__construct();//los dos puntos son para acceder de manera estática a un método sin tener que instanciar el objeto, en este caso llama al contructor de la clase padre
        $this->auditarRedes='experto';
        $this->experienciaRedes=5;
    }
}