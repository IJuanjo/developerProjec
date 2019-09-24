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
       $fecha2=isset($_POST['fecha2'] ) ? $_POST['fecha2'] : false;
       $horasv=isset($_POST['horasv'] ) ? $_POST['horasv'] : false;
       $activo=new Activos();
        $activo->setNombre($nombre);
        $activo->setDes_tecnica($desc_tecnica);
        $activo->setFecha_compra($fecha);
        $activo->setFecha_insta($fecha2);
        $activo->setVida_horas($horasv);
        $resultado=$activo->guardar();
        if($resultado){
            $_SESSION['resultado']=$resultado;
        }else{
         $_SESSION['resultado']='hubo un error';
        }
        header("Location:".base_url.'activos/guardar');
    }
    public function delete(){
       if(isset($_GET['id'])){
        echo "se encontro";
       }
    }
    
}
