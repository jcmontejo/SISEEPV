<?php 
/*Incluimos conexion a BD*/
include('../conexion/conexion.php');
/*Recuperamos datos*/
$nombre_proyecto = $_POST['nombre_proyecto'];
$objetivo = $_POST['objetivo'];
$alumnos_solicitados = $_POST['alumnos_solicitados'];
$solicitante = $_POST['solicitante'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$periodo = $_POST['periodo'];
$user_id = $_POST['user_id'];

	if ($nombre_proyecto == "" || $objetivo == "" || $alumnos_solicitados == "" || $solicitante == "" || $direccion == "") {
			# code...
			echo '<script language="javascript">window.location="../proyectos/projectbank.php?mensaje=1"</script>;';
			exit();
		}


try {
	session_start();
	$userid = $_SESSION['iddocente'];
        $comprobar = $base->query("SELECT * FROM docent WHERE user_id = $userid ");
            $checar = $comprobar->rowCount();
            if ($checar !=0) {
                # code...
            }
            else{
                echo '<script language="javascript">window.location="../proyectos/project.php?mensaje=4"</script>;';
            }

		$consultadocent = $base->query("SELECT * FROM docent WHERE user_id = $user_id");
		$datos = $consultadocent->fetch();
		$docent_id = $datos['id'];
	    $comprobar = $base->query("SELECT * FROM projects_bank WHERE docent_id = '$docent_id' AND nombre_proyecto = '$nombre_proyecto'");
            $checar = $comprobar->rowCount();
            if ($checar != 0) {
				# code...
				echo '<script language="javascript">window.location="../proyectos/project.php?mensaje=2"</script>;';
				exit();
			}

			/*Preparamos la insersion*/
			$sql = "INSERT INTO projects_bank (nombre_proyecto,objetivo,alumnos_solicitados,solicitante,direccion,email,periodo,docent_id) 
			VALUES ('$nombre_proyecto','$objetivo',$alumnos_solicitados,'$solicitante','$direccion','$email','$periodo',$docent_id)";
			/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo "<span style='color:#ff0000'>Error en la ejecucion de la consulta</span>";
			}
			else
			{
				echo '<script language="javascript">window.location="../proyectos/listaproyectosbanco.php?mensaje=3"</script>;';
				exit();
			}
	
} catch (Exception $e) {
/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
	}
 ?>