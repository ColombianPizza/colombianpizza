<?php
$servername="localhost";
$username="root";
$password="";
$dbname="pueba";

try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO producto( codigo, detalle, valor)
	VALUES('".$_POST['codigo']."','".$_POST['detalle']."','".$_POST['valor']."')";

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