<?php 

include_once('conexion.php');

$id = $_REQUEST['id'];



$sql = "DELETE FROM contactos WHERE id = '$id'";
$respuesta = $conexion->query($sql);



if($respuesta){
	header("Location: ../index.php");
}
else{
	echo "Eliminacion no exitosa";
}

?>