<?php 

class Persona{
	public $dni;
	public $nombre;
	
	final public function setNombre($nombre){
		$this->nombre = addslashes(strtoupper(trim($nombre)));
		
	}
	
	
}

class Empleado extends Persona{
	public $cargo;
	
	public function setCargo($cargo){
		$this->cargo = addslashes(strtoupper(trim($cargo)));
		
	}
	
}

$regEmpleado = new Empleado;
$regEmpleado->setNombre('Juan Sanchez');

echo '<br>'.$regEmpleado->nombre;




?>