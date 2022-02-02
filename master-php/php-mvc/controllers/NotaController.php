<?php
class NotaController {
    public function readAll(){
        //modelo
        require_once 'models/nota.php';
        
        //Acción
        $nota = new Nota();

        $notasFindAll=$nota->selectAll('entradas');

        //Vista
        require_once 'views/nota/readAll.php';
    }

    public function create(){
        require_once 'models/Nota.php';
        $nota = new Nota();
        $nota->setUsuarioid(1);
        $nota->setTitulo("Lista de libros");
        $nota->setDescripcion("Sombras De Identidad, Palabras Radiantes");
        $nota->insert();
        
        header("Location:http://localhost/master-php/php-mvc/?controller=nota&action=readall");
    }
    public function delete(){
        
    }
}