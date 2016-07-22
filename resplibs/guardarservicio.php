<?php
/*Incluimos conexion a BD*/
include('../conexion/conexion.php');

/*Obtenemos las variables de usuario*/
$task = $_POST['task'];
$area = $_POST['area'];
$contact = $_POST['contact'];
$fecha = $_POST['fecha'];
$user_id = $_POST['user_id'];



try {
	/*ERROR*/
	session_start();
	$user_id = $_SESSION['idempresa'];
	$comprobar = $base->query("SELECT * FROM company WHERE user_id = $user_id");
		$checar = $comprobar->rowCount();
		if ($checar != 0)
		 {
			
		}
		else{
			echo '<script language="javascript">window.location="../empresas/servicio.php?mensaje=4"</script>;';
			exit();
		}

	if ($task == "" || $area == ""  || $contact == "" || $contact == "" ) {
			# code...
			echo '<script language="javascript">window.location="../empresas/servicio.php?mensaje=1"</script>;';
			exit();
		}
			$consultacompany = $base->query ("SELECT * FROM company WHERE user_id = $user_id ");
			$datos = $consultacompany->fetch();
			$company_id = $datos['id'];


			/*Preparamos la insersion*/
			$sql = "INSERT INTO social_service(task,area,contact,fecha,company_id) 
			VALUES ('$task', '$area', '$contact', '$fecha', $company_id)";
			/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo "<span style='color:#ff0000'>Error en la ejecucion de la consulta</span>";
			}
			else
			{
				echo '<script language="javascript">window.location="../empresas/servicio.php?mensaje=3"</script>;';
				exit();
			}
	
} catch (Exception $e) {
/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
	}
	
?>