<?php
$servername="localhost";
$username="root";
$password="";
$dbname="colombian_pizza";


	try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO tipodoc(idtipodoc, descripcion)
	 VALUES('".$_POST['codigo']."','".$_POST['descripcion']."')";

	

	$conn -> exec ($sql);

	
	print "<script>alert(\"agregado exitosamente.\");window.location='busqueda_tipodoc.php';</script>";

   }
catch(PDOException $e)
	{
	echo "ERROR AL INGRESAR LOS DATOS = ERROR: ";
	echo $sql."<br>" .$e ->getMessage();	

	}
$conn=null;



?>
