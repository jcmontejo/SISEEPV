<?php
/*Incluimos conexion a BD*/
include('../conexion/conexion.php');

/*Obtenemos las variables de usuario*/
$nombre_proyecto = $_POST['nombre_proyecto'];
$objetivo = $_POST['objetivo'];
$alumnos_solicitados = $_POST['alumnos_solicitados'];
$solicitante = $_POST['solicitante'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$periodo = $_POST['periodo'];
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
			echo '<script language="javascript">window.location="../empresas/residentes.php?mensaje=4"</script>;';
			exit();
		}

	if ($nombre_proyecto == "" || $objetivo == "" || $alumnos_solicitados == "" || $solicitante == "" || $direccion == "" || $email == "" || $periodo == "") {
			# code...
			echo '<script language="javascript">window.location="../empresas/residentes.php?mensaje=1"</script>;';
			exit();
		}
			$consultacompany = $base->query ("SELECT * FROM company WHERE user_id = $user_id ");
			$datos = $consultacompany->fetch();
			$company_id = $datos['id'];


			/*Preparamos la insersion*/
			$sql = "INSERT INTO professional_residence_request (nombre_proyecto,objetivo,alumnos_solicitados,solicitante,direccion,email,periodo,company_id) 
			VALUES ('$nombre_proyecto', '$objetivo', $alumnos_solicitados, '$solicitante', '$direccion','$email','$periodo', $company_id)";
			/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo "<span style='color:#ff0000'>Error en la ejecucion de la consulta</span>";
			}
			else
			{
				echo '<script language="javascript">window.location="../empresas/residentes.php?mensaje=3"</script>;';
				exit();
			}
	
} catch (Exception $e) {
/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
	}
	
?>