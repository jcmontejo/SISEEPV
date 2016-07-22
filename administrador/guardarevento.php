<?php 	
	/*Incluimos el archivo coneccion.php, que es la coneccion a la bd*/
	include('conexion.php');
	
	/*Con el metodo $_FILE (usamos este metodo porque estamos trabajando con archivos)
	extraemos del archivo su nombre, ubicacion, tamaño y tipo y lo almacenamos en sus
	respectivas variables*/
	$name = $_FILES['archivo']['name'];
	$ubicacion = $_FILES['archivo']['tmp_name'];
	$type = $_FILES['archivo']['type'];
	$size = $_FILES['archivo']['size'];

	$descripcion = $_POST['description'];
	$lugar = $_POST['place'];
	$fecha = $_POST['date'];
	$managment_id = $_POST['managment_id'];	

	/*Con la funcion fopen abrimos la ubicacion de nuestro archivo ('r', indica que sera solo lectura)
	y guardamos el la variable $fp*/
	$fp = fopen($ubicacion, 'r');
	$content = fread($fp, filesize($ubicacion));
	$content = addslashes($content);
	fclose($fp);
	if (!get_magic_quotes_gpc()) {
		# code...
		$name = addslashes($name);
	}
	try{		
	
		$sql = "INSERT INTO events (name, type, size, content, description, place, date_event, managment_id)
		 values ('$name','$type','$size','$content','$descripcion','$lugar','$fecha',$managment_id)";

		/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
			# code...
			echo '<script language="javascript">window.location="agregar_evento.php?mensaje=1"</script>;';
				exit();
		}
		else{
			echo '<script language="javascript">window.location="agregar_evento.php?mensaje=2"</script>;';
				exit();
		}

	}
	catch(Exeption $e){
		die('Error: '.$e->GetMessage());

	}
 ?>