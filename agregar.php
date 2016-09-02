<?php

	include "conexion.php";

		$sql = "INSERT INTO persona( idpersona, nombre, apellido, direccion, telefono, celular, email, password, roles_idroles, tipodoc_idtipodoc, login_idlogin)
	VALUES('".$_POST['identificacion']."','".$_POST['tdocumento']."','".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['direccion']."','".$_POST['telefono']."','".$_POST['celular']."','".$_POST['email']."','".$_POST['password']."','".$_POST['roles']."','".$_POST['identificacion']."')";

				$query = $con ->query($sql); 

		if ($query!=null)
 	    {

			print "<script>alert(\"agregado exitosamente.\");window.location='busqueda_persona.html';</script>";
		}
		else
		{
			print "<script>alert(\"no se puedo agregar.\");window.location='busqueda_persona.html';</script>";
		}	
?>