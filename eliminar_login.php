<?php	
	if(!empty($_GET))
	{
			include "conexion.php";

			$sql = "DELETE FROM login WHERE idlogin=".$_GET["idlogin"];
			$query = $con->query($sql);
			if($query!=null)
			{
				print "<script>alert(\"Eliminado exitosamente.\");window.location='busqueda_login.php';</script>";
			}
			else
			{
				print "<script>alert(\"No se pudo eliminar.\");window.location='busqueda_login.php';</script>";
			}

	}

?>