<!DOCTYPE HTML>
<html>
<head>
  <title>datos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
 <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
 <script src="js/responsive-nav.js" type="text/javascript"></script>
 <script src="js/owl.carousel.js" type="text/javascript"></script>
 <script type="text/javascript">

</script>
 </head>
 <body>

<?php
	include "conexion.php";

	$user_id=null;

		$sql1= "SELECT `login`.`idlogin`, `login`.`password` FROM  `login` ";
	
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>

<br><br><br>
<table border="1px" width="80px" class="table">
<thead>
					<td><b>Identificacion</b></td>
					<td><b>Password</b></td>
					
</thead>


<?php while ($r=$query->fetch_array()):?>

<tr>
	<td><?php echo $r["idlogin"]; ?> </td> 	
	<td><?php echo $r["password"]; ?> </td>
	<td><a href=" "><button type="submit" class="btn btn-success">Editar</button></td>
	<td><a href="eliminar_login.php?idlogin=<?php echo $r["idlogin"];?> " class="btn btn-warning" onclick="return confirm('Esta seguro de eliminar')">Elimiar</a></td>
	
</tr>

<?php endwhile;?>

</table>

<?php else:?>

	<p class="alert alert-warning">No hay resultados que mostrar!!!</p>

<?php endif;?>

</body>
</html>