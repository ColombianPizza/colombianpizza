<?php

	if(!empty($_GET))
	{
			include "conexion.php";

			$sql = "DELETE FROM tipodoc WHERE idtipodoc=".$_GET["idtipodoc"];
			$query = $con->query($sql);
			if($query!=null)
			{
				print "<script>alert(\"Eliminado exitosamente.\");window.location='busqueda_tipodoc.php';</script>";
			}
			else
			{
				print "<script>alert(\"No se pudo eliminar.\");window.location='busqueda_tipodoc.php';</script>";
			}

	}

?>