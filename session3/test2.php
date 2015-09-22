<?php 
class Personas{
	public $dni;
	public $nom;
	public $fechanacimiento;
	public  $sexo;
	//metodo construcctor que inicializa 
	
	public function __construct($dni,$nom,$fecha,$sexo ){
		
		$this->setDni($dni);
		$this->setNombre($nom);
		$this->setfechanaciento($fecha);
		$this->setsexo($sexo);
		
	}
	public function __destruct(){
		echo 'adios mundo cruel';
	}
	
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
$ciudadano = new Personas('624632846','Americomuñoz','1994-08-15','masculino'); 
//instanciar el objeto
//exatraer los datos 
echo 'DNI --------------------'.$ciudadano->dni.'<br>';
echo 'NOMBRE------------------'.$ciudadano->nombre.'<br>';
echo 'FECHA DE NACIMIENTO ----'.$ciudadano->fechanac.'<br>';
echo 'SEXO -------------------'.$ciudadano->sexo.'<br>';

?>