<?php
$servername="localhost";
$username="root";
$password="";
$dbname="pueba";

try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO inicio( email, contrasena)
	VALUES('".$_POST['email']."','".$_POST['contrasena']."')";

	$conn -> exec ($sql);

	echo "DATOS INGRESADOS CORRECTAMENTE";
   }
catch(PDOException $e)
	{
	echo "ERROR AL INGRESAR LOS DATOS = ERROR: ";
	echo $sql. "<br>" .$e ->getMessage();	

	}
$conn=null;


?>