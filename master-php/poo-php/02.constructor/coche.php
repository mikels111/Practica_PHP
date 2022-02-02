<?php
class Coche{
    // Atributos o propiedades (variables)

    // Public: podemos acceder desde cualquier lugar, dentro de la clase actual, dentro de clases que hereden de esta clase o fuera de la clase
    public $color;
    // Protected: podemos acceder desde la clase que los define y desde clases que hereden de esta
    protected $marca;
    // Private: únicamente se puede acceder desde la clase que los define
    private $modelo;

    


    public $caballos;
    public $plazas;
    public $velocidad;

    public function __construct($color,$modelo,$marca,$caballos,$plazas,$velocidad)
    {
        $this->color=$color;
        $this->modelo=$modelo;
        $this->marca=$marca;
        $this->caballos=$caballos;
        $this->plazas=$plazas;
        $this->velocidad=$velocidad;
    }
    // Métodos (Funciones)
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color=$color;
    }
    public function acelerar($veloc){
        $this->velocidad=$veloc;
    }
    public function getModelo(){
        return $this->modelo;
    }

    public function getInformacion(Coche $miCoche){// Se le puede indicar la clase del objeto que tiene que ser
        $informacion = "Los datos del coche son <br/>";
        $informacion .="$miCoche->color<br/>";
        $informacion .="$miCoche->marca<br/>";
        $informacion .="$miCoche->modelo";
        return $informacion;
    }
} 