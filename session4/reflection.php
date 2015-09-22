<?php 
$class = new ReflectionClass('mysqli');

foreach($class->getMethods() as $m){
	echo $m->name.'<br>';
	$param = $class->getmethod($m->name);
	foreach ($param->getParameters() as $i=>$parametro)
		echo '-->'.$parametro->getName();
	
}

?>