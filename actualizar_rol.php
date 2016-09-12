<?php
	include "conexion.php";

	$sql = "UPDATE roles SET descripcion =\"$POST[descripcion]\" WHERE idroles=".$POST["idroles"];

	$query = $con->query($sql);

	if($query!=null)

	{
		print "<script>alert(\"Actualizado exitosamente.\");window.location='busqueda_roles.php';</script>";
	}
	else
	{
		print "<script>alert(\"No se pudo actualizar.\");window.location='busqueda_roles.php';</script>";	
	}

?>