<?php 
//Incluir conexion a bd
include ('../conexion/conexion.php');

//Recuperamos datos
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$user_id = $_POST['user_id'];

try {
	if ($name == "" || $last_name == "" || $email == "") {
		# code...
		echo '<script language="javascript">window.location="../proyectos/docent.php?mensaje=1"</script>;';
			exit();
	}
	$comprobar = $base->query("SELECT * FROM docent WHERE email = '$email' AND user_id = $user_id ");
     $checar = $comprobar->rowCount();
	if ($checar != 0) {
		# code...
		echo '<script language="javascript">window.location="../proyectos/docent.php?mensaje=2"</script>;';
		exit();
	}
//Preparamos la insercion
	$sql = "INSERT INTO docent (name,last_name,email,user_id) VALUES ('$name','$last_name','$email',$user_id)";

//Añadimos los datos a la tabla
	$ok = $base -> exec($sql);
	if ($ok == FALSE) {
		# code...
		echo "<span style='color:#ff0000'>Error en la ejecucion de la consulta</span>";
	}
	else
	{
		echo '<script language="javascript">window.location="../proyectos/home.php?mensaje=3"</script>;';
				exit();
	}

} catch (Exception $e) {
/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
	}
	
 ?>
