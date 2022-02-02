<?php
require_once 'Modelo.php';
require_once 'config/Database.php';

class Nota extends Modelo{
    public $usuario_id;
    public $titulo;
	public $descripcion;
	public $fecha;

	public function __construct(){
		parent::__construct();
	}
	public function insert(){
		$sql="INSERT INTO entradas(usuario_id, titulo, descripcion, fecha) VALUES ($this->usuario_id, '$this->titulo', '$this->descripcion', CURDATE())";
		$query=$this->db->query($sql);
		return $query;
	}

	function getUsuarioid() { 
 		return $this->usuarioid; 
	} 

	function setUsuarioid($usuario_id) {  
		$this->usuario_id = $usuario_id; 
	} 

	function getTitulo() { 
 		return $this->titulo; 
	} 

	function setTitulo($titulo) {  
		$this->titulo = $titulo; 
	} 

	function getDescripcion() { 
 		return $this->descripcion; 
	} 

	function setDescripcion($descripcion) {  
		$this->descripcion = $descripcion; 
	} 

	function getFecha() { 
 		return $this->fecha; 
	} 

	function setFecha($fecha) {  
		$this->fecha = $fecha; 
	} 
}