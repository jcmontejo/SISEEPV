<?php
/*Incluimos conexion a BD*/
include('../conexion/conexion.php');

/*Obtenemos las variables de usuario*/
$name = $_POST['name'];
$type = $_POST['type'];
$email = $_POST['email'];
$password = $_POST['pass1'];
$password_confirmation = $_POST['pass2'];

/*comprobamos que ambas contraseñas sean iguales*/
if ($pass1 == $pass2) {
	$pass = $pass1;
}
else 
{
	echo '<script language="javascript">window.location="../administrador/crearusuario.php?mensaje=1"</script>;';
    exit();
}

/*Encriptamos la contraseña de usuario*/
	$encriptada = sha1($pass);

	try {
		
		$comprobar = $base->query("SELECT * FROM user WHERE email = '$email' AND password = '$encriptada' ");
            $checar = $comprobar->rowCount();
            if ($checar != 0) {
				# code...
				echo '<script language="javascript">window.location="../administrador/crearusuario.php?mensaje=2"</script>;';
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
				
						echo '<script language="javascript">window.location="../administrador/crearusuario.php?mensaje=3"</script>;';
					
					
			    } 

	} 

	catch (Exception $e) 
	{
		/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
	}
	

 ?>