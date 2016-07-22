<?php
/*Incluimos conexion a BD*/
include('../conexion/conexion.php');

/*Obtenemos las variables de usuario*/
$company_name = $_POST['company_name'];
$sector = $_POST['sector'];
$home = $_POST['home'];
$phone = $_POST['phone'];
$director_name = $_POST['director_name'];
$link_with_ittg = $_POST['link_with_ittg'];
$user_id = $_POST['user_id'];


try {
	if ($company_name == "" || $sector == "" || $home == "" || $phone=="" || $director_name == "" || $link_with_ittg == "") {
			# code...
			echo '<script language="javascript">window.location="../empresas/registro.php?mensaje=1"</script>;';
			exit();
		}
	$comprobar = $base->query("SELECT * FROM company WHERE company_name = '$company_name' AND user_id = $user_id");
            $checar = $comprobar->rowCount();
            if ($checar != 0) {
				# code...
				echo '<script language="javascript">window.location="../empresas/registro.php?mensaje=2"</script>;';
				exit();

			}
			/*Preparamos la insersion*/
			$sql = "INSERT INTO company (company_name,sector,home,phone,director_name,link_with_ittg,user_id) 
			VALUES ('$company_name', '$sector', '$home', '$phone', '$director_name', '$link_with_ittg', $user_id)";
			/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo "<span style='color:#ff0000'>Error en la ejecucion de la consulta</span>";
			}
			else
			{
				echo '<script language="javascript">window.location="../empresas/home.php?mensaje=3"</script>;';
				exit();
			}
	
} catch (Exception $e) {
/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
	}
	
?>