<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/validaciones.js"></script>
</head>
<body>
<section id="inicio">
<h1>Agenda de contactos</h1>
<form id="form" action="procesos/modificar.php" method="post">
	<h2>Modificar Contacto</h2>

	<?php
		include("procesos/conexion.php");
		$id = $_REQUEST['id'];
		$sql = "SELECT * FROM contactos WHERE id = '$id'";
		$respuesta = $conexion->query($sql);
		$contacto = $respuesta->fetch_assoc();
	?>

	<input type="hidden" name="id" value="<?php echo $contacto['id']; ?>"></input>
	<input type="text" value="<?php echo $contacto['nombre']; ?>"name="nombre" placeholder="Nombre...">
	<input type="text" value="<?php echo $contacto['apellido']; ?>"name="apellido" placeholder="Apellido...">
	<input type="text" value="<?php echo $contacto['telefono']; ?>"name="telefono" placeholder="Telefono...">
	<input type="text" value="<?php echo $contacto['correo']; ?>"name="correo" placeholder="Correo...">                          
	<input type="text" value="<?php echo $contacto['edad']; ?>"name="edad" placeholder="Edad...">
	<input type="submit" value="Actualizar"> </input>
	<a id="boton" style="text-decoration: none;
	background-color: #01A9DB;
	color: #fff;
	padding: 5px;" href="index.php">Cancelar</a>
</form>
	
</section>

</body>
</html>
