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
<table>
	<thead>
		<tr>
			<td colspan="2"><a href="formulario.php">+ Nuevo</a></td>
			<td colspan="4">Agenda de Contactos</td>
			<td colspan="2"><form action="buscar.php" method="POST">
				<input required type="text" name="q" placeholder="Buscar">
				<input type="submit" name="" value="Buscar">
			</form></td>

		</tr>
		<tr>
			<td>Numero</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Telefono</td>
			<td>Edad</td>
			<td>Correo</td>			
			<td colspan="2">Operaciones</td>
		</tr>
	</thead>
	<tbody>
	<?php 
		include("procesos/conexion.php");
		$id = $_POST['q'];
		$sql = "SELECT * FROM contactos WHERE id LIKE '%$id%' OR
										nombre LIKE '%$id%' OR
										apellido LIKE '%$id%' OR
										correo LIKE '%$id%' OR 
										telefono LIKE '%$id%' OR
										edad LIKE '%$id%'";
		$respuesta = $conexion->query($sql);

		while ($contacto = $respuesta->fetch_assoc()) {
			
	?>
		<tr>

			<td><?php echo $contacto['id']; ?></td>
			<td><?php echo $contacto['nombre']; ?></td>
			<td><?php echo $contacto['apellido']; ?></td>
			<td><?php echo $contacto['telefono']; ?></td>
			<td><?php echo $contacto['edad']; ?></td>
			<td><?php echo $contacto['correo']; ?></td>
			
			<td><a href="formulario2.php?id=<?php echo $contacto['id'];?>">Modificar</a></td>
			<td><a href="procesos/eliminar.php?id=<?php echo $contacto['id'];?>" onclick="return Eliminar();">Eliminar</a></td>
		</tr>
		<?php
		}
	 ?>

	</tbody>
</table>

	
</section>

</body>
</html>