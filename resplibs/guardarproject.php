<?php 
/*Incluimos conexion a BD*/
include('../conexion/conexion.php');
/*Recuperamos datos*/
$nombre_residencia = $_POST['nombre_residencia'];
$linea_investigacion = $_POST['linea_investigacion'];
$residentes = $_POST['residentes'];
$nombre_tesis = $_POST['nombre_tesis'];
$nombre_tesistas = $_POST['nombre_tesistas'];
$publicacion_revistas = $_POST['publicacion_revistas'];
$publicacion_tipo = $_POST['publicacion_tipo'];
$prototipos = $_POST['prototipos'];
$prototipo_descripcion = $_POST['prototipo_descripcion'];
$patente = $_POST['patente'];
$periodo_termino = $_POST['periodo_termino'];
$user_id = $_POST['user_id'];

	if ($$nombre_residencia == "" AND $residentes == "") {
                # code...
		echo '<script language="javascript">window.location="../proyectos/project.php?mensaje=1"</script>;';
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
	    $comprobar = $base->query("SELECT * FROM project WHERE docent_id = '$docent_id' AND nombre_residencia = '$nombre_residencia'");
            $checar = $comprobar->rowCount();
            if ($checar != 0) {
				# code...
				echo '<script language="javascript">window.location="../proyectos/project.php?mensaje=2"</script>;';
				exit();
			}

			/*Preparamos la insersion*/
			$sql = "INSERT INTO project (nombre_residencia,linea_investigacion,residentes,nombre_tesis,nombre_tesistas,publicacion_revistas,publicacion_tipo,prototipos,prototipo_descripcion,patente,periodo_termino,docent_id) 
			VALUES ('$nombre_residencia','$linea_investigacion','$residentes','$nombre_tesis','$nombre_tesistas','$publicacion_revistas','$publicacion_tipo','$prototipos','$prototipo_descripcion','$patente','$periodo_termino',$docent_id)";
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