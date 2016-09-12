<?php

	if(!empty($_GET))
	{
			include "conexion.php";

			$sql = "DELETE FROM ingredientes WHERE idingredientes=".$_GET["idingredientes"];
			$query = $con->query($sql);
			if($query!=null)
			{
				print "<script>alert(\"Eliminado exitosamente.\");window.location='busqueda_ingredientes.php';</script>";
			}
			else
			{
				print "<script>alert(\"No se pudo eliminar.\");window.location='busqueda_ingredientes.php';</script>";
			}

	}

?>