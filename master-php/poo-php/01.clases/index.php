<?php 

// Definir clase
class Coche{
    // Atributos o propiedades (variables)
    public $color="Blanco";
    public $modelo="Scenic";
    public $marca="Renault";
    public $caballos=150;
    public $plazas=5;
    public $velocidad=200;

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
} 

// Crear objeto

$coche = new Coche();

// Usar métodos

echo $coche->getColor();
$coche->setColor('Rojo');
echo $coche->getColor();