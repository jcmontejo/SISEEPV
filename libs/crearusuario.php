<?php
/*Incluimos conexion a BD*/
include('../conexion/conexion.php');

/*Obtenemos las variables de usuario*/
$name = $_POST['name'];
$type = $_POST['type'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];

/*comprobamos que ambas contraseñas sean iguales*/
if ($password == $password_confirmation) {
	$pass = $password;
}
else 
{
	echo '<script language="javascript">window.location="../seguridad/registro.php?mensaje=1"</script>;';
    exit();
}

/*Encriptamos la contraseña de usuario*/
	$encriptada = sha1($pass);

	try {
		if ($name == "" || $type == "" || $email == "" || $password = "" || $password_confirmation = "") {
			# code...
			echo '<script language="javascript">window.location="../seguridad/registro.php?mensaje=2"</script>;';
			exit();
		}
		$comprobar = $base->query("SELECT * FROM user WHERE email = '$email' AND password = '$encriptada' ");
            $checar = $comprobar->rowCount();
            if ($checar != 0) {
				# code...
				echo '<script language="javascript">window.location="../seguridad/registro.php?mensaje=3"</script>;';
				exit();

			}
			/*Preparamos la insersion*/
			$sql = "INSERT INTO user (name,type,email,password) 
			VALUES ('$name', '$type', '$email', '$encriptada')";
			/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo "<span style='color:#ff0000'>Error en la ejecucion de la consulta</span>";
			}
			else{
				$resultado = $base->query("SELECT * FROM user WHERE email = '$email' AND password = '$encriptada' ");
				$numero_registro = $resultado->rowCount();
				$datos = $resultado->fetch(); 
				$tipo = $datos['type'];

				if ($numero_registro != 0) {
					# code...
					session_start();
					/*Redireccionamos al usuario al home egresado*/
					if ($tipo == 1) {
						# code...
						/*Iniciamos la sesion*/
						$_SESSION['idegresado'] = $datos['id'];
						$_SESSION['egresado'] = $datos['name'];
						$_SESSION['emailegresado'] = $datos['email'];
						$_SESSION['passegresado'] = $datos['password'];
						echo '<script language="javascript">window.location="../egresado/home.php"</script>;';
					}
					    
					if ($tipo == 2) {
						# code...
						/*Iniciamos la sesion*/
						$_SESSION['empresa'] = $datos['name'];
						$_SESSION['passempresa'] = $datos['password'];
						$_SESSION['idempresa'] = $datos['id'];
						$_SESSION['emailempresa'] = $datos['email'];
						echo '<script language="javascript">window.location="../empresas/home.php"</script>;';
					}
				 
			} 

	} 
}
	catch (Exception $e) 
	{
		/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
	}
	finally{
		$base = null;
	}

 ?>