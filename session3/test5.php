<?php 
include_once 'config.php';

$con = new mysqli(BD_HOST, BD_USER, BD_PASS, BD_NAME);
if ($con->connect_errno) echo 'error al conectar la base de datos'.$con->connect_error;
else 
	echo 'conexion exitosa :)';
$sql = "select * from Employees";
$resul = $con->query($sql);
	
?>
<html>
<body>
<table border=1>

	<thead>
	<tr>
		<th>numero</th>
		<th>primer nombre</th>
		<th>segundo nombre</th>
		<th>extencion</th>
	</tr>		
	</thead>
	
<tbody>
<?php while ($reg = $resul->fetch_object()):?>
	<tr>
		<td><?php echo $reg->employeeNumber?></td>
		<td><?php echo $reg->lastName?></td>
		<td><?php echo $reg->firstName?></td>
		<td><?php echo $reg->extension?></td>		
		</tr>
<?php endwhile;?>
</tbody>

</table>
</body>
</html>