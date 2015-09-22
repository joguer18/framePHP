<?php 
include_once 'config.php';

$con = new mysqli(BD_HOST, BD_USER, BD_PASS, BD_NAME);
if ($con->connect_errno) echo 'error al conectar la base de datos'.$con->connect_error;
else 
	echo 'conexion exitosa :)';
$sql = "select * from Products";
$resul = $con->query($sql);
	
?>
<html>
<body>
<table border=1>

	<thead>
	<tr>
		<th>Codigo</th>
		<th>nombre</th>
		<th>linea</th>
		<th>Precio</th>
	</tr>		
	</thead>
	
<tbody>
<?php while ($reg = $resul->fetch_object()):?>
	<tr>
		<td><?php echo $reg->productCode?></td>
		<td><?php echo $reg->productName?></td>
		<td><?php echo $reg->productLine?></td>
		<td><?php echo $reg->buyPrice?></td>		
		
	</tr>
<?php endwhile;?>
</tbody>

</table>
</body>
</html>