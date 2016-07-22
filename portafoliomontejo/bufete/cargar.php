<?php 
	include('includes/conexion.php');
	$id = $_POST['txtid'];
	$idcaso = $_POST['txtidcaso'];
	$derecho = $_POST['txttipo'];

	$nombre = $_FILES['archivo']['name'];
	$ubicacion = $_FILES['archivo']['tmp_name'];
	$tamanio = $_FILES['archivo']['size'];
	$tipo = $_FILES['archivo']['type'];
	if ($id == "" || $idcaso == "") {
		# code...
		echo '<script language="javascript">window.location="subirarchivo.php?mensaje=3"</script>;';
		exit();
	}

	$comprobar = $base->query("SELECT * FROM archivos WHERE id_archivo = '$id' ");
	$checar = $comprobar->rowCount();

	if ($checar != 0) {
		# code...
		echo '<script language="javascript">window.location="subirarchivo.php?mensaje=4"</script>;';
		exit();
	}

	$fp = fopen($ubicacion, 'r');
	$contenido = fread($fp, filesize($ubicacion));
	$contenido = addslashes($contenido);
	fclose($fp);

	if (!get_magic_quotes_gpc()) {
		# code...
		$nombre = addslashes($nombre);
	}

	
	try {
		$query = "INSERT INTO archivos (id_archivo, derecho, nombre, tipo, tamanio, contenido, id_caso) VALUES ($id, '$derecho', '$nombre', '$tipo', '$tamanio', '$contenido',$idcaso)";
		$ok = $base->exec($query);
		if ($ok == FALSE) {
				# code...
				echo '<script language="javascript">window.location="subirarchivo.php?mensaje=2"</script>;';
			}
			else{
				echo '<script language="javascript">window.location="subirarchivo.php?mensaje=1"</script>;';
			}
		
	} catch (Exception $e) {
		/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
		
	}finally{
		$base = null;
	}
 ?>