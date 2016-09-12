<?php
	include "conexion.php";

	$sql = "UPDATE tipodoc SET descripcion =\"$POST[descripcion]\" WHERE idtipodoc=".$POST["idtipodoc"];

	$query = $con->query($sql);

	if($query!=null)

	{
		print "<script>alert(\"Actualizado exitosamente.\");window.location='busqueda_tipodoc.php';</script>";
	}
	else
	{
		print "<script>alert(\"No se pudo actualizar.\");window.location='busqueda_tipodoc.php';</script>";	
	}

?>