<?php

	if(!empty($_GET))
	{
			include "conexion.php";

			$sql = "DELETE FROM  productos WHERE codigo_productos=".$_GET["codigo_productos"];
			$query = $con->query($sql);
			if($query!=null)
			{
				print "<script>alert(\"Eliminado exitosamente.\");window.location='busqueda_producto.php';</script>";
			}
			else
			{
				print "<script>alert(\"No se pudo eliminar.\");window.location='busqueda_producto.php';</script>";
			}

	}

?>