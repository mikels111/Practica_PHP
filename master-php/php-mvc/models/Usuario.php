<?php
require_once 'Modelo.php';
class Usuario extends Modelo{

    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    
    public function __construct(){
		parent::__construct();
	}

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    public function insert($nombre,$apellidos,$email,$password,$fecha_registro){
        $sql="INSERT INTO usuarios(`id`, `nombre`, `apellidos`, `email`, `password`, `fecha_registro`) VALUES (NULL, '$nombre', '$apellidos', '$email', $password, $fecha_registro)";
    }
    


}
