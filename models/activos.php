<?php

class Activos {
	private $cod_maq ;
	private $nombre ;
	private $des_tecnica; 
	private $fecha_compra ;
	private $fecha_insta ;
	private $vida_horas;
	private $db;

	public function __construct()
	{
		$this->db=Conexion::conectar();	
	}
	public function getCod_maq(){
		return $this->cod_maq;
	}
	public function setCod_maq($cod_maq){
		$this->cod_maq=$cod_maq;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	public function getDes_tecnica(){
		return $this->des_tecnica;
	}
	public function setDes_tecnica($des_tecnica){
		$this->des_tecnica=$des_tecnica;
	}
	public function getFecha_compra(){
		return $this->fecha_compra;
	}
	public function setFecha_compra($fecha_compra){
		$this->fecha_compra=$fecha_compra;
	}
	public function getFecha_insta(){
		return $this->fecha_insta;
	}
	public function setFecha_insta($fecha_insta){
		$this->fecha_insta=$fecha_insta;
	}
	public function getVida_horas(){
		return $this->vida_horas;
	}
	public function setVida_horas($vida_horas){
		$this->vida_horas=$vida_horas;
	}                                                                                                                                                                                                           
	public function vistaP(){
		$pedido=$this->db->query("SELECT*FROM lista_activos");
		return $pedido;
	}
	public function guardar(){
		$nombre=$this->getNombre();
		$des_tecnica=$this->getDes_tecnica();
		$fecha_compra=$this->getFecha_compra();
		$fecha_insta=$this->getFecha_insta();
		$vida_horas=$this->getVida_horas();
		$sql="INSERT INTO lista_activos (nombre,des_tecnica,fecha_compra,fecha_insta,vida_horas) 
		values ('$nombre','$des_tecnica','$fecha_compra','$fecha_insta','$vida_horas')";
		$sta=$this->db->query($sql);
		$mensaje='';
		if($sta){
			$mensaje='guardado con exito!';
		}else{
			$mensaje='error';
		}
		return $mensaje;
	}
	public function delete(){
		
	}	
}
?>