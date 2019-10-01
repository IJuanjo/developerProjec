<?php
class Mantenimiento {
	private $codigo_c;
	private $fecha_rev;
	private $tipo_man;
	private $fecha_inicio;
	private $fecha_termino;
	private $observacion;
	private $fallas;
	private $cod_tec;
	private $cod_man;

	public function getCodigo_c(){
		return $this->codigo_c;
	}
	public function setCodigo_c($codigo_c){
		$this->codigo_c=$codigo_c;
	}
	public function getFecha_rev(){
		return $this->fecha_rev;
	}
	public function setFecha_rev($fecha_rev){
		$this->fecha_rev=$fecha_rev;
	}
	public function getTipo_man(){
		return $this->tipo_man;
	}
	public function setTipo_man($tipo_man){
		$this->tipo_man=$tipo_man;
	}
	public function getFecha_inicio(){
		return $this->fecha_inicio;
	}
	public function setFecha_inicio($fecha_inicio){
		$this->fecha_inicio=$fecha_inicio;
	}
	public function getFecha_termino(){
		return $this->fecha_termino;
	}
	public function setFecha_termino($fecha_termino){
		$this->fecha_termino=$fecha_termino;
	}
	public function getObservacion(){
		return $this->observacion;
	}
	public function setObservacion($observacion){
		$this->observacion=$observacion;
	}
	public function  getFallas(){
		return $this->fallas;
	}
	public function setFallas($fallas){
		$this->fallas=$fallas;
	}
	public function getCod_tec(){
		return $this->cod_tec;
	}
	public function setCod_tec($cod_tec){
		$this->cod_tec=$cod_tec;
	}
	public function getCod_man(){
		return $this->cod_man;
	}
	public function setCod_man($cod_man){
		$this->cod_man=$cod_man;
	}
}	