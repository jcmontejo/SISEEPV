<?php
/*Incluimos conexion a BD*/
include('../conexion/conexion.php');

/*Obtenemos las variables de usuario*/
$require_position = $_POST['require_position'];
$task = $_POST['task'];
$habilities = $_POST['habilities'];
$area = $_POST['area'];
$salary = $_POST['salary'];
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
			echo '<script language="javascript">window.location="../empresas/vacantes.php?mensaje=4"</script>;';
			exit();
		}


	if ($require_position == "" || $task == "" || $habilities == "" || $area == "" || $salary == "" || $contact == "" || $fecha == "") {
			# code...
			echo '<script language="javascript">window.location="../empresas/vacantes.php?mensaje=1"</script>;';
			exit();
		}
			$consultacompany = $base->query ("SELECT * FROM company WHERE user_id = $user_id ");
			$datos = $consultacompany->fetch();					 
			$company_id = $datos['id'];


			/*Preparamos la insersion*/
			$sql = "INSERT INTO vacancy_request (require_position,task,habilities,area,salary,contact,fecha,company_id) 
			VALUES ('$require_position', '$task', '$habilities', '$area', '$salary', '$contact', '$fecha', $company_id)";
			/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo "<span style='color:#ff0000'>Error en la ejecucion de la consulta</span>";
			}
			else
			{
				echo '<script language="javascript">window.location="../empresas/vacantes.php?mensaje=3"</script>;';
				exit();
			}
	
} catch (Exception $e) {
/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
	}
	
?>