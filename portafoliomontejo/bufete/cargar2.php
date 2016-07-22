<?php 
		
	include('includes/conexion.php');
	$id = $_POST['txtid'];

	$nombre = $_FILES['archivo']['name'];
	$ubicacion = $_FILES['archivo']['tmp_name'];
	$tamanio = $_FILES['archivo']['size'];
	$tipo = $_FILES['archivo']['type'];
	
	$fp = fopen($ubicacion, 'r');
	$contenido = fread($fp, filesize($ubicacion));
	$contenido = addslashes($contenido);
	fclose($fp);

	if (!get_magic_quotes_gpc()) {
		# code...
		$nombre = addslashes($nombre);
	}

	
	try {
		$query = "UPDATE archivos SET nombre = '$nombre', tipo = '$tipo', tamanio = '$tamanio', contenido = '$contenido' WHERE id_archivo = $id";
		$ok = $base->exec($query);
		if ($ok == FALSE) {
				# code...
				echo '<script language="javascript">window.location="actualizar.php?mensaje=2"</script>;';
			}
			else{
				echo '<script language="javascript">window.location="actualizar.php?mensaje=1"</script>;';
			}
		
	} catch (Exception $e) {
		/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
		
	}finally{
		$base = null;
	}
	
	
 ?>