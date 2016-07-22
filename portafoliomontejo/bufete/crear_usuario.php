<?php 
	include('includes/conexion.php');
	/*Cachamos las variables para la insersion*/
	$usuario = $_POST['txtusuario'];
	$pass    = $_POST['txtpass'];
	$acceso  = $_POST['txtacceso'];
	/*Encriptamos la contraseña de usuario*/
	$encriptada = sha1($pass);

	try {
		if ($usuario == "" || $pass == "" || $acceso == "") {
			# code...
			echo '<script language="javascript">window.location="nuevousuario.php?mensaje=2"</script>;';
			exit();
		}

			$comprobar = $base->query("SELECT * FROM catalogo_usuarios WHERE usuario = '$usuario' AND pass = '$encriptada' ");
            $checar = $comprobar->rowCount();
            if ($checar != 0) {
				# code...
				echo '<script language="javascript">window.location="nuevousuario.php?mensaje=3"</script>;';
				exit();

			} 
			/*Preparamos la insersion*/
			$sql = "INSERT INTO catalogo_usuarios (usuario,pass,nivel_acceso) 
			VALUES ('$usuario', '$encriptada', $acceso)";
			/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo "<span style='color:#ff0000'>Error en la ejecucion de la consulta</span>";
			}
			else{
				echo '<script language="javascript">window.location="nuevousuario.php?mensaje=1"</script>;';
			}
		
	} catch (Exception $e) {
		/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
		
	}
	finally{
		$base = null;
	}
 ?>