<?php

	if(!empty($_GET))
	{
			include "conexion.php";

			$sql = "DELETE FROM persona WHERE idpersona=".$_GET["idpersona"];
			$query = $con->query($sql);
			if($query!=null)
			{
				print "<script>alert(\"Eliminado exitosamente.\");window.location='busqueda_persona.php';</script>";
			}
			else
			{
				print "<script>alert(\"No se pudo eliminar.\");window.location='busqueda_persona.php';</script>";
			}

	}

?>