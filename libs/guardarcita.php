<?php 
/*Incluimos conexion a BD*/
include('../conexion/conexion.php');
/*Recuperamos datos*/
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
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
                echo '<script language="javascript">window.location="../egresado/cita.php?mensaje=4"</script>;';
				exit();
            }
        /*Error*/  
	if ($name == "" || $email == "" || $message == "") {
			# code...
			echo '<script language="javascript">window.location="../egresado/cita.php?mensaje=1"</script>;';
			exit();
		}
		$consultagraduate = $base->query("SELECT * FROM graduate WHERE user_id = $user_id");
		$datos = $consultagraduate->fetch();
		$graduate_id = $datos['id'];
	   /* $comprobar = $base->query("SELECT * FROM personal_data WHERE curp = '$curp' AND graduate_id = $graduate_id");
            $checar = $comprobar->rowCount();
            if ($checar != 0) {
				# code...
				echo '<script language="javascript">window.location="../egresado/personaldata.php?mensaje=2"</script>;';
				exit();

			}*/
			/*Preparamos la insersion*/
			$sql = "INSERT INTO cita (name,email,message,graduate_id) 
			VALUES ('$name', '$email', '$message',$graduate_id)";
			/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo "<span style='color:#ff0000'>Error en la ejecucion de la consulta</span>";
			}
			else
			{
				echo '<script language="javascript">window.location="../egresado/cita.php?mensaje=3"</script>;';
				exit();
			}
	
} catch (Exception $e) {
/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
	}
	finally{
		$base = null;
	}
 ?>