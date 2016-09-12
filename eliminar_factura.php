<?php

	if(!empty($_GET))
	{
			include "conexion.php";

			$sql = "DELETE FROM factura WHERE factura=".$_GET["factura"];
			$query = $con->query($sql);
			if($query!=null)
			{
				print "<script>alert(\"Eliminado exitosamente.\");window.location='busqueda_factura.php';</script>";
			}
			else
			{
				print "<script>alert(\"No se pudo eliminar.\");window.location='busqueda_factura.php';</script>";
			}

	}

?>