<?php

	if(!empty($_GET))
	{
			include "conexion.php";

			$sql = "DELETE FROM roles WHERE idroles=".$_GET["idroles"];
			$query = $con->query($sql);
			if($query!=null)
			{
				print "<script>alert(\"Eliminado exitosamente.\");window.location='busqueda_roles.php';</script>";
			}
			else
			{
				print "<script>alert(\"No se pudo eliminar.\");window.location='busqueda_roles.php';</script>";
			}

	}

?>