<?php
class UsuarioController{
    public function readAll() {
        require_once 'models/usuario.php';
        $usuarios = new Usuario();
        $usuariosFindAll=$usuarios->selectAll('usuarios');
        require_once 'views/usuarios/readAll.php';
    }
    public function create() {
        
        require_once 'views/usuarios/create.php';
    }
}


