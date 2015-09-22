<?php 
include_once 'config.php';

$con = new mysqli(BD_HOST, BD_USER, BD_PASS, BD_NAME);
if ($con->connect_errno) echo 'error al conectar la base de datos'.$con->connect_error;
else 
	echo 'conexion exitosa :)';
		
?>
