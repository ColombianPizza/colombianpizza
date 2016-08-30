<?php 

	include'conxion.php';

	$sql="SELECT * FROM formulario ";

	$resultado=$mysqli->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Usuarios Registrados</title>
	<link rel="stylesheet" type="text/css" href="css/formulario.css">
</head>
	<body>

		<center><h1>Usuarios</h1></center>

		<a href="conexion.php" class="new">Nuevo Usuario</a>

		<form name="formulario" method="POST" action=".php">
					<p class="buscar">Buscar:</p>
					<input type="text" name="nombre" placeholder="Buscar " class="bu">
					<input type="submit" name="enviar" value="Buscar" class="bus">
		</form>

		<table border="1px" width="80px" class="table">
			<thead>
				<tr>				
					<td><b>Documento</b></td>
					<td><b>Nombre</b></td>
					<td><b>Apellido</b></td>
					<td><b>contrase&ntilde;a</b></td>
					<td><b>Telefono</b></td>
					<td><b>Celular</b></td>
					<td><b>Correo</b></td>
					<td><b>Editar</b></td>
					<td><b>Eliminar</b></td>
				</tr>

				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['Documento'];?>
							</td>
							<td><?php echo $row['Nombre'];?>
							</td>
							<td><?php echo $row['Apellido'];?>
							</td>
							<td><?php echo $row['Telefono'];?>
							</td>
							<td><?php echo $row['Celular'];?>
							</td>
							<td><?php echo $row['Correo'];?>
							</td>
							<td><?php echo $row['Contra'];?>
							</td>
							<td><a href=" "><img src="" width="50" /></td>

							<td><a href=" "><img src="" width="50" /></td>
						</tr>	
					<?php } ?>				
				</tbody>
			</thead>
		</table>
	</body>
</html>


