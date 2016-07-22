<?php 
/*Incluimos conexion a BD*/
include('../conexion/conexion.php');
/*Recuperamos datos*/
$admision_day = $_POST['admision_day'];
$exit_day = $_POST['exit_day'];
$certification = $_POST['certification'];
$day_certification = $_POST['day_certification'];
$certification_method = $_POST['certification_method'];
$average = $_POST['average'];
$last_grade_student = $_POST['last_grade_student'];
$graduate_institution_name = $_POST['graduate_institution_name'];
$user_id = $_POST['user_id'];

try {
	/*Error*/
       session_start();
        $email = $_SESSION['emailegresado'];
        $user_id = $_SESSION['idegresado'];
        $comprobar = $base->query("SELECT * FROM graduate WHERE email = '$email' AND user_id = $user_id ");
            $checar = $comprobar->rowCount();
            if ($checar != 0) {
               

            }
            else
            {
                 # code...
                echo '<script language="javascript">window.location="../egresado/estudiosdata.php?mensaje=4"</script>;';
				exit();
            }
        /*Error*/  
	if ($admision_day == "" || $exit_day == "" || $certification == "" || $day_certification == "" || $certification_method == "" || $average == "" || $last_grade_student == "" || $graduate_institution_name == "") {
			# code...
			echo '<script language="javascript">window.location="../egresado/estudiosdata.php?mensaje=1"</script>;';
			exit();
		}
		$consultagraduate = $base->query("SELECT * FROM graduate WHERE user_id = $user_id ");
		$datos = $consultagraduate->fetch();
		$graduate_id = $datos['id'];
	    $comprobar = $base->query("SELECT * FROM studies_data WHERE graduate_id = $graduate_id ");
            $checar = $comprobar->rowCount();
            if ($checar != 0) {
				# code...
				echo '<script language="javascript">window.location="../egresado/estudiosdata.php?mensaje=2"</script>;';
				exit();

			}
			/*Preparamos la insersion*/
			$sql = "INSERT INTO studies_data (admision_day,exit_date,certification,day_certification, certification_method,average, last_grade_student, graduate_institution_name,graduate_id) 
			VALUES ('$admision_day', '$exit_day', '$certification', '$day_certification', '$certification_method', '$average','$last_grade_student','$graduate_institution_name', $graduate_id)";
			/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo "<span style='color:#ff0000'>Error en la ejecucion de la consulta</span>";
			}
			else
			{
				echo '<script language="javascript">window.location="../egresado/estudiosdata.php?mensaje=3"</script>;';
				exit();
			}
	
} catch (Exception $e) {
/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
	}
	/*finally{
		$base = null;
	}*/
 ?>