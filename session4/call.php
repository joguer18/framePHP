<?php 


class Direccion {
	protected  $ciudad;
	protected  $pais;
	
	public function setCiudad($ciudad){
		$this->ciudad = $ciudad;
	}
	
	public function setPais($pais){
		$this->pais = $pais;
	}
	
	public function getCiudad(){
		return $this->ciudad;
	}
	
	public function getPais(){
		return $this->pais;
	}
}




class Persona {
	
	protected $nombre;
	protected $direccion;
	
	public function __construct(){
		$this->direccion = new Direccion;
	}
	
	public function setNombre($nombre){
		$this->nombre = $nombre;
		return;
	}
	
	public function getNombre(){
		return $this->nombre; 
	}
	
	public function __call($metodo,$argumento){
		if (method_exists($this->direccion,$metodo)){
			return call_user_func_array(
				array($this->direccion,$metodo),$argumento
			);
		}
	}
	

}


$usuario = new Persona;

$usuario->setNombre('Frank Sanchez');

$usuario->setCiudad('Lima');


echo $usuario->getNombre(). ' vive en  '. $usuario->getCiudad();




?>