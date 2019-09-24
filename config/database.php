<?php

Class Conexion{
    public static function  conectar(){
        $db=new mysqli('localhost','root','','controldeactivos');
        $db->query("SET NAMES 'UTF-8'");
        return $db;
    }
}