<?php 
/*Incluimos conexion a BD*/
include('../conexion/conexion.php');
/*Recuperamos datos*/
$q1 = $_POST['question1'];
$q2 = $_POST['question2'];
$q3 = $_POST['question3'];
$q4 = $_POST['question4'];
$q5 = $_POST['question5'];
$q6 = $_POST['question6'];
$q7 = $_POST['question7'];
$q8 = $_POST['question8'];
$q9 = $_POST['question9'];
$q10 = $_POST['question10'];
$q11 = $_POST['question11'];
$q12 = $_POST['question12'];
$q13 = $_POST['question13'];
$q14 = $_POST['question14'];
$q15 = $_POST['question15'];
$q16 = $_POST['question16'];
$q17 = $_POST['question17'];
$q18 = $_POST['question18'];
$q19 = $_POST['question19'];
$q20 = $_POST['question20'];
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
                echo '<script language="javascript">window.location="../egresado/encuesta.php?mensaje=4"</script>;';
				exit();
            }
        /*Error*/ 
	if ($q1 == "" || $q2 == "" || $q3 == "" || $q4 == "" || $q5 == "" || $q6 == "" || $q7 == "" || $q8 == "" || $q9 == "" || $q10 == "" || $q11 == "" || $q12 == "" || $q13 == "" || $q14 == "" || $q15 == "" || $q16 == "" || $q17 == "" || $q18 == "" || $q19 == "" || $q20 == "") {
			# code...
			echo '<script language="javascript">window.location="../egresado/encuesta.php?mensaje=1"</script>;';
			exit();
		}
		$consultagraduate = $base->query("SELECT * FROM graduate WHERE user_id = $user_id ");
		$datos = $consultagraduate->fetch();
		$graduate_id = $datos['id'];
	    $comprobar = $base->query("SELECT * FROM test WHERE graduate_id = $graduate_id ");
            $checar = $comprobar->rowCount();
            if ($checar != 0) {
				# code...
				echo '<script language="javascript">window.location="../egresado/encuesta.php?mensaje=2"</script>;';
				exit();

			}
			/*Preparamos la insersion*/
			$sql = "INSERT INTO test (q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,graduate_id) 
			VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13', '$q14', '$q15', '$q16','$q17','$q18', '$q19', '$q20', $graduate_id)";
			/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo "<span style='color:#ff0000'>Error en la ejecucion de la consulta</span>";
			}
			else
			{
				echo '<script language="javascript">window.location="../egresado/encuesta.php?mensaje=3"</script>;';
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