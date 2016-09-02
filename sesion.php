<?php
$servername="localhost";
$username="root";
$password="";
$dbname="colombian_pizza";

$usuario = $_POST['id'];
$password = $_POST['ejemplo_password_1'];

$conexion = mysql_connect("localhost","root","");
mysql_select_db("colombian_pizza",$conexion);
$sql = "SELECT idlogin FROM login where idlogin = '$usuario' AND password = '$password'";
$comprobar = mysql_query($sql);

if(mysql_num_rows($comprobar)>0)

 	{
 		$idlogin = mysql_result($comprobar, 0);
 		setcookie("misitio_userid","$idlogin",  time()+3600);
 		header("location:dream\colombian.html");

	}
else
	{
		echo "<script>if(confirm('usuario y contraseña incorrectos')){
		document.location='Colomibia Pizza.html';}
		else{ alert('Operación Cancelada');
		}</script>";	
	}


		
	
?>