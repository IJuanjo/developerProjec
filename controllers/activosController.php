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
       $nombre=isset($_POST['nombre'] ) ? $_POST['nombre'] : false;
       $desc_tecnica=isset($_POST['descripcion'] ) ? $_POST['descripcion'] : false;
       $fecha=isset($_POST['fecha'] ) ? $_POST['fecha'] : false;
       $tiempo=isset($_POST['tiempo'] ) ? $_POST['tiempo'] : false;
       $fecha2=isset($_POST['fecha2'] ) ? $_POST['fecha2'] : false;
       $tiempo2=isset($_POST['tiempo2'] ) ? $_POST['tiempo2'] : false;
       $horasv=isset($_POST['horasv'] ) ? $_POST['horasv'] : false;
    }
    
}
