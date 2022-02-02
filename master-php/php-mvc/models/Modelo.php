<?php 
require_once 'config/Database.php';
class Modelo{

    public $db;

    public function __construct(){
        $this->db=Database::connection();
    }

    public function selectAll($tabla){ 
        $query=$this->db->query("SELECT * FROM $tabla ORDER BY id DESC");
        return $query;
    }
}