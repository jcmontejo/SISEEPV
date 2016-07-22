<?php 
	include('includes/conexion.php');
	/*Cachamos las variables para la insersion*/
	$id = $_POST['txtnumero'];
	$fecha_auto = $_POST['txtfechaauto'];
	$tipo = $_POST['txtcuaderno'];
	$fecha_pub = $_POST['txtfechapub'];
	$resenia = $_POST['txtresenia'];
	$id_caso = $_POST['txtid'];

	/*Preparamos la insercion de datos*/
	try {
		if ($id == "" || $fecha_auto == "" || $tipo == "" || $fecha_pub == "" || $resenia == "" || $id_caso == "") {
			# code...
			echo '<script language="javascript">window.location="subirsintesis.php?mensaje=2"</script>;';
			exit();
		}

			$comprobar = $base->query("SELECT * FROM expediente WHERE id_sintesis = '$id' ");
            $checar = $comprobar->rowCount();
            if ($checar != 0) {
				# code...
				echo '<script language="javascript">window.location="subirsintesis.php?mensaje=3"</script>;';
				exit();

			} 
			/*Preparamos la insersion*/
			$sql = "INSERT INTO expediente (id_sintesis, fecha_auto, tipo_cuaderno, fecha_publicacion, resumen, id_caso) 
			VALUES ($id, '$fecha_auto', '$tipo', 'fecha_pub', '$resenia', '$id_caso')";
			/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo "<span style='color:#ff0000'>Error en la ejecucion de la consulta</span>";
			}
			else{
				echo '<script language="javascript">window.location="nuevocaso.php?mensaje=1"</script>;';
			}
		
	} catch (Exception $e) {
		/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
		
	}
	finally{
		$base = null;
	}
 ?>