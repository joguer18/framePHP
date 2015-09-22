<?php 
interface MyInterface{
	public function suma($val1,$val2);
	public function resta($val1,$val2);	
}

interface MyInterface1 extends MyInterface{
	public function producto($val1,$val2);
	public function division($val1,$val2);
	
}

class Myclass implements MyInterface1{
	public function suma($val1,$val2){
		$sum = $val1+$val2;
		echo "El resultado de la suma es: ".$sum."<br>";
	}
	public function resta($val1,$val2){
		$sub = $val1-$val2;
		echo "El resultado de la resta es: ".$sub."<br>";
	}
	public function producto($val1,$val2){
		$mul = $val1*$val2;
		echo "El resultado de la multiplicación es: ".$mul."<br>";
	}
	public function division($val1,$val2){
		$div = $val1/$val2;
		echo "El resultado de la división es: ".$div."<br>";
	}
	
}

$myClass = new Empleado;
$myClass->setNombre('Juan Sanchez');

echo '<br>'.$regEmpleado->nombre;




?>