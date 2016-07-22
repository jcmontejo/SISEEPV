<?php 	
	/*Incluimos el archivo coneccion.php, que es la coneccion a la bd*/
	include('../conexion/conexion.php');
	
	/*Con el metodo $_FILE (usamos este metodo porque estamos trabajando con archivos)
	extraemos del archivo su nombre, ubicacion, tamaño y tipo y lo almacenamos en sus
	respectivas variables*/
	$name = $_FILES['archivo']['name'];
	$ubicacion = $_FILES['archivo']['tmp_name'];
	$type = $_FILES['archivo']['type'];
	$size = $_FILES['archivo']['size'];

	
	$project_id = $_POST['id_project'];	

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
		$comprobar = $base->query("SELECT * FROM file_project WHERE project_id = '$project_id'");
            $checar = $comprobar->rowCount();
            if ($checar != 0) {
				# code...
				echo '<script language="javascript">window.location="../proyectos/listaproyectos.php?mensaje=6"</script>;';
				exit();
			}


		$sql = "INSERT INTO file_project (name, type, size, content, project_id) values ('$name','$type','$size','$content',$project_id)";

		/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
			# code...
			echo '<script language="javascript">window.location="../proyectos/subirarchivo.php?mensaje=1"</script>;';
				exit();
		}
		else{
			echo '<script language="javascript">window.location="../proyectos/listaproyectos.php?mensaje=5"</script>;';
				exit();
		}

	}
	catch(Exeption $e){
		die('Error: '.$e->GetMessage());

	}
 ?>