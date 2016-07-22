<?php 
	include('includes/conexion.php');
	/*Cachamos las variables para la insersion*/
	$id = $_POST['txtid'];
	$status = $_POST['txtstatus'];
	$clasificacion = $_POST['txtclasif'];
	$conclusion = $_POST['txtconclusion'];
	
	/*Preparamos la insercion de datos*/
	try {
		if ($id == "" || $status == "" || $clasificacion == "" ) {
			# code...
			echo '<script language="javascript">window.location="actualiza_caso.php?mensaje=2"</script>;';
			exit();
		}
			/*Preparamos la insersion*/
			$sql = "UPDATE caso SET status = '$status', clasificacion = '$clasificacion' WHERE id_caso = $id ";
			/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo "<span style='color:#ff0000'>Error en la ejecucion de la consulta</span>";
			}
			else{
				echo '<script language="javascript">window.location="actualiza_caso.php?mensaje=1"</script>;';
			}
		
	} catch (Exception $e) {
		/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
		
	}
	finally{
		$base = null;
	}
 ?>