<?php 
/*Incluimos conexion a BD*/
include('../conexion/conexion.php');
/*Recuperamos datos*/
$project_name = $_POST['project_name'];
$investigation_line = $_POST['investigation_line'];
$status = $_POST['status'];
$product_ontends = $_POST['product_ontends'];
$funding = $_POST['funding'];
$participating_students = $_POST['participating_students'];
$user_id = $_POST['user_id'];

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

	if ($project_name == "" || $investigation_line == "" || $status == "" || $product_ontends == "" || $funding == "" || $participating_students == "") {
			# code...
			echo '<script language="javascript">window.location="../proyectos/project.php?mensaje=1"</script>;';
			exit();
		}
		$consultadocent = $base->query("SELECT * FROM docent WHERE user_id = $user_id");
		$datos = $consultadocent->fetch();
		$docent_id = $datos['id'];
	    $comprobar = $base->query("SELECT * FROM project WHERE docent_id = '$docent_id' AND project_name = '$project_name'");
            $checar = $comprobar->rowCount();
            if ($checar != 0) {
				# code...
				echo '<script language="javascript">window.location="../proyectos/project.php?mensaje=2"</script>;';
				exit();
			}

			/*Preparamos la insersion*/
			$sql = "INSERT INTO project (project_name,investigation_line,status,product_ontends,funding,participating_students,docent_id) 
			VALUES ('$project_name', '$investigation_line', '$status', '$product_ontends', '$funding', '$participating_students', $docent_id)";
			/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo "<span style='color:#ff0000'>Error en la ejecucion de la consulta</span>";
			}
			else
			{
				echo '<script language="javascript">window.location="../proyectos/listaproyectos.php?mensaje=3"</script>;';
				exit();
			}
	
} catch (Exception $e) {
/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
	}
	
 ?>