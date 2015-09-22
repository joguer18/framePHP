<?php 

$arr = array(8,2,5,7);

$cadena = serialize($arr);

echo 'Cadena serializada ',$cadena,'<br>';

var_dump(unserialize($cadena));
?>