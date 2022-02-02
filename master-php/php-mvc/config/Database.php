<?php

class Database{
    public static function connection(){
        $conexion=new mysqli("localhost","root","","notas_mvc");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}