<?php
$servername="localhost";
$username="root";
$password="";
$dbname="colombian_pizza";


	try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO factura(factura, iva_productos, subtotal_producto, total_factura, fecha_facturacion, Persona_idpersona)
	 VALUES('".$_POST['factura']."','".$_POST['iva']."','".$_POST['subtotal']."','".$_POST['total']."','".$_POST['fecha']."','".$_POST['cliente']."')";

	

	$conn -> exec ($sql);

	
	print "<script>alert(\"agregado exitosamente.\");window.location='busqueda_factura.php';</script>";

   }
catch(PDOException $e)
	{
	echo "ERROR AL INGRESAR LOS DATOS = ERROR: ";
	echo $sql."<br>" .$e ->getMessage();	

	}
$conn=null;



?>
