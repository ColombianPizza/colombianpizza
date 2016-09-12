<!DOCTYPE html>
<html>
	<head>
		<title>EDITAR USUARIO</title>
		<link href='http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' rel='stylesheet' type="text/css">
  		<script type="js/jquery.min.js"></script>>
</head>

<body>

<?php
include "conexion.php";

$user_id=null;
$sql1="select * form descripcion where idroles = ".$_GET["idroles"];
$query = $con->query($sql1);
$person =null;

if($query->num_rows>0)
{
	while ($r=$query->fetch_object())
	{
		$person=$r;
		break;
	}
}
?>

<form role="form" method="post" action="actualizar_rol.php">
<br><br><br><br>

<div class="container">
<div class="col-md-4 col-md-offset-4">
<div class="panel panel-heading">
ACTUALIZAR USUARIO
</div>

<div class="panel-body">

<div class="form-group">
<label for="name_u">Sr usuario actualice el tipo de ROL</label>
<input type="text" name="form-control" value="<?php echo $person->descripcion; ?>" name="descripcion" id="descripcion" required>
</div>
	
	<input type="hidden" name="idroles" value="<?php echo $person->idroles; ?>">
	<button type="submit" class="bbtn btn-sucess">Actualizar</button>
</form>
<?php else:?>

		<p class="alert alert-danger">No se encuentra el usuario a modificar</p>

<?php endif:?>

</body>
 </html>