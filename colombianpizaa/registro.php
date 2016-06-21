<?php
$servername="localhost";
$username="root";
$password="";
$dbname="pizzeria";

try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO persona(cedula, nombre, direccion, telefono, celular, email, email2, contrasena)
	 VALUES('".$_POST['id']."','".$_POST['nombre']."','".$_POST['direccion']."','".$_POST['telefono']."','".$_POST['celular']."','".$_POST['email']."','".$_POST['email2']."','".$_POST['ejemplo_password_1']."')";

	

	$conn -> exec ($sql);

	echo "DATOS INGRESADOS CORRECTAMENTE";
   }
catch(PDOException $e)
	{
	echo "ERROR AL INGRESAR LOS DATOS = ERROR: ";
	echo $sql."<br>" .$e ->getMessage();	

	}
$conn=null;


?>