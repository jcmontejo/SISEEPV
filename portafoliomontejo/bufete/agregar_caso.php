<?php 
	include('includes/conexion.php');
	/*Cachamos las variables para la insersion*/
	$id = $_POST['txtid'];
	$resenia = $_POST['txtresenia'];
	$status = $_POST['txtstatus'];
	$clasificacion = $_POST['txtclasif'];
	$tipo = $_POST['txttipo'];
	$fecha_inicio = $_POST['txtfechainicio'];
	$fecha_publicacion = $_POST['txtfechapub'];
	$fecha_auto = $_POST['txtfechaauto'];
	$fecha_efectos = $_POST['txtfechaefectos'];
	$fecha_termino = $_POST['txtfechatermino'];
	$conclusion = $_POST['txtconclusion'];
	$matricula = $_POST['txtmatricula'];

	/*Preparamos la insercion de datos*/
	try {
		if ($id == "" || $resenia == "" || $status == "" || $clasificacion == "" || $tipo == "" || $matricula == "") {
			# code...
			echo '<script language="javascript">window.location="nuevocaso.php?mensaje=2"</script>;';
			exit();
		}

			$comprobar = $base->query("SELECT * FROM caso WHERE id_caso = '$id' ");
            $checar = $comprobar->rowCount();
            if ($checar != 0) {
				# code...
				echo '<script language="javascript">window.location="nuevocaso.php?mensaje=3"</script>;';
				exit();

			} 
			/*Preparamos la insersion*/
			$sql = "INSERT INTO caso (id_caso, resenia, status, clasificacion, tipo_caso, fecha_inicio, fecha_publicacion, fecha_auto, fecha_efectos, fecha_termino, conclusion, cliente_matricula) 
			VALUES ($id, '$resenia', '$status', '$clasificacion', '$tipo', '$fecha_inicio', '$fecha_publicacion', '$fecha_auto', '$fecha_efectos', '$fecha_termino', '$conclusion', $matricula)";
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