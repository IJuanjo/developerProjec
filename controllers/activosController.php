<?php 
require_once 'models/activos.php';
Class ActivosController{
    function index(){
        $activo=new Activos();
        $datos= $activo->vistaP();
        return require_once 'views/activos/tabla.php';
    }
}
