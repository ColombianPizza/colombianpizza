<?php
$servername="localhost";
$username="root";
$password="";
$dbname="colombian_pizza";

try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO roles(idroles, descripcion)
	VALUES('".$_POST['roles']."')";

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