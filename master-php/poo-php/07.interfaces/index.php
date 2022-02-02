<?php

interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
}

class Asus implements Ordenador{
    public $modelo;

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo=$modelo;
    }
    public function encender(){

    }
    public function apagar(){

    }
    public function reiniciar(){
        
    }
}

$ordenadorAsus= new Asus();
$ordenadorAsus->setModelo('2021');
var_dump($ordenadorAsus);
echo "Modelo:".$ordenadorAsus->getModelo();