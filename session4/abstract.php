<?php

abstract class vehiculo
{
	abstract function set_name();
}

class motos extends vehiculo
{
	public $marca ;
	
	function set_name()
	{
		$this->marca= 'Yamaha';
	}
}

class autos extends vehiculo
{
	public $marca ;
	
	function set_name()
	{
		$this->marca= 'Nissan';
	}
}



$obj_moto = new motos();

$obj_moto->set_name();

echo $obj_moto->marca .'<br>';



$obj_auto = new autos();

$obj_auto->set_name();

echo $obj_auto->marca .'<br>';


?>