<?php
class conexion{
    static public function conectar(){
        //la base de datos, el host, el nombre de la base de datos, etc
        $link = new PDO(":host=;dbname=;root=");
        $link ->exec("set names utf8_decode");
        return $link
    }
}