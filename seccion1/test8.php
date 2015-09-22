<?php 
$cadena = '123456789|Americo muñoz|jr castilla san miguel| 71987877|19 de nobienbre del 1994';
$datos = explode('|',$cadena);
foreach ($datos as $valor)
	 echo $valor.'<br>';
list($dni,$nombre,$direccion,$nun,$fechnacimento) = explode('|',$cadena);
echo  $dni.'<br>';
echo  $nombre.'<br>';
echo  $direccion.'<br>';
echo  $nun.'<br>';
echo  $fechnacimento.'<br>';

$Mes =array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','setiembre','octubre','nobienbre','diciembre');
$dias =array('domingo','lunes','martes','miercoles','jueves','viernes','sabado');
$cad_mes = implode('|',$Mes);
$cad_dias = implode('|',$dias);
echo $cad_dias.'<br>';
echo $cad_mes;
?>
