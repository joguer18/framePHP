<?php 

class Persona {
	
	private $data;
	
	public function __set($parametro,$valor){
		$this->data["$parametro"]=$valor;
		return;
	}
	
	public function __get($parametro){
		if (isset($this->data["$parametro"]))
			return $this->data["$parametro"];
		else
		  return false;
	}

}


$comprador = new Persona;


$ciudadano->nombre = 'Frank Sanchez';

echo $ciudadano->nombre;


?>