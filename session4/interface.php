<?php
interface MyInterface
{
	public function suma($val1,$val2);
	public function resta($val1,$val2);
}

interface MyInterface1 extends Myinterface
{
	public function producto($val1,$val2);
	public function division($val1,$val2);
}

class Myclass implements MyInterface1
{
	public function suma($val1,$val2)
	{
		$sum=$val1+$val2;
		echo "El resultado de la suma es : ". $sum. "</br>";
	}
	public function resta($val1,$val2)
	{
		$sub=$val1-$val2;
		echo "El resultado de la resta es : ". $sub. "</br>";
	}
	public function producto($val1,$val2)
	{
		$mul=$val1*$val2;
		echo "El resultado de la multiplicacion es  : ". $mul. "</br>";
	}
/*	public function division($val1,$val2)
	{
		$div=$val1/$val2;
		echo "El resultado de la division es  : ". $div. "</br>";
	}*/
}
$obj= new Myclass();
$obj->resta(2,1);
$obj->producto(1,3);
$obj->division(4,2);
$obj->suma(4,2);
?>