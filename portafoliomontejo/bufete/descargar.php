<?php 
	
	if(isset($_GET['id']))
{


include('includes/conexion.php');

$id    = $_GET['id'];

$resultado = $base->query("SELECT *FROM archivos WHERE id_archivo = '$id'");
while ($datos = $resultado->fetch()) {
	# code...
	$nombre = $datos['nombre'];
	$tipo = $datos['tipo'];
	$tamanio = $datos['tamanio'];
	$contenido = $datos['contenido'];
	header("Content-length: $tamanio");
	header("Content-type: $tipo");
	header("Content-Disposition: attachment; filename= $nombre");
	echo $contenido;
	


}


}
 ?>