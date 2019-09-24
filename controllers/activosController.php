<?php 
require_once 'models/activos.php';
Class ActivosController{
    public function index(){
        $activo=new Activos();
        $datos= $activo->vistaP();
        return require_once 'views/activos/tabla.php';
    }
    public function guardar(){
        return require_once 'views/activos/agregar.php';
    }
    public function save(){
        if($_POST){
            var_dump($_POST);
        }else{
            echo "faild";
        }
    }
    
}
