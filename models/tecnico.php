<?php
class tecnico {
	private $cod_tec;
	private $nombre;
	private $db;
	public function __construct()
	{	
		$this->db=Conexion::conectar();
	}
	public function getCod_tec(){
		return $this->cod_tec;
	}
	public function setCod_tec($cod_tec){
		$this->cod_tec=$cod_tec;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	public function getAll(){
		$sql="SELECT*from tecnico";
		$tecnicos=$this->db->query($sql);
		return $tecnicos;
	}
}