<?php 
class Areas {
	
	function __construct(){
		echo __CLASS__ .'<br>';
		echo __METHOD__.'<br>';
		
	}
}


function suma($a,$b){
	echo  'ejecutando la funcion '. __FUNCTION__ .' = ';
	return $a+$b;
}


echo __FILE__ .'<br>';
echo __LINE__ .'<br>';
echo __DIR__ .'<br>';


echo suma(5,4).'<br>';

$a = new Areas;

?>