<?php 
class Personas{
	public $dni;
	public $nom;
	public $fechanacimiento;
	public  $sexo;
	
	public function setDni($dni){
		$this->dni = $dni;
		
	}
	public function setNombre($nom){
		$this->nombre = $nom;
		
	}
	public function setfechanaciento($fecha){
		$this->fechanac = $fecha;
				
	}
	public function setsexo($sexo){
		$this->sexo = $sexo;
		
	}
	//codigo principal de script
		
}
$ciudadano = new Personas; //instanciar el objeto
$ciudadano->setDni('624632846');
$ciudadano->setNombre('Americo muñoz');
$ciudadano->setfechanaciento('1994-08-15');
$ciudadano->setsexo('masculino');

//exatraer los datos 
echo 'DNI --------------------'.$ciudadano->dni.'<br>';
echo 'NOMBRE------------------'.$ciudadano->nombre.'<br>';
echo 'FECHA DE NACIMIENTO ----'.$ciudadano->fechanac.'<br>';
echo 'SEXO -------------------'.$ciudadano->sexo.'<br>';
?>