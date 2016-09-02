<?php
$servername="localhost";
$username="root";
$password="";
$dbname="colombian_pizza";



try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO login(idlogin, password)
	 VALUES('".$_POST['id']."','".$_POST['ejemplo_password1']."')";

	

	$conn -> exec ($sql);

	
	print "<script>alert(\"agregado exitosamente.\");window.location='busqueda_persona.php';</script>";

   }
catch(PDOException $e)
	{
	echo "ERROR AL INGRESAR LOS DATOS = ERROR: ";
	echo $sql."<br>" .$e ->getMessage();	

	}
$conn=null;

try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO persona(idpersona, nombre, apellido, direccion, telefono, celular, email, password, roles_idroles, tipodoc_idtipodoc, login_idlogin)
	 VALUES('".$_POST['id']."','".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['direccion']."','".$_POST['telefono']."','".$_POST['celular']."','".$_POST['email']."','".$_POST['ejemplo_password1']."','".$_POST['roles']."','".$_POST['Tipo_documento']."','".$_POST['id']."')";

	

	$conn -> exec ($sql);

	print "<script>alert(\"agregado exitosamente.\");window.location='busqueda_persona.php';</script>";
   }
catch(PDOException $e)
	{
	echo "ERROR AL INGRESAR LOS DATOS = ERROR: ";
	echo $sql."<br>" .$e ->getMessage();	

	}
$conn=null;

?>


