<?php 
/*Incluimos conexion a BD*/
include('../conexion/conexion.php');

$correo = $_POST['email'];
//Método con str_shuffle()
function generateRandomString($length = 10) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}
$var1 = generateRandomString();
$encriptada = sha1($var1);
/*
echo "<br>";
echo $encriptada;
echo "<br>";
echo $correo;
echo "<br>";
*/
$comprobar = $base->query("SELECT * FROM user WHERE email = '$correo'");
            $checar = $comprobar->rowCount();
            if ($checar != 0) {
				# code...
				/*echo '<script language="javascript">window.location="../seguridad/registro.php?mensaje=3"</script>;';*/
				echo "Usuario en base de datos";
				

			}
			else
			{
				echo '<script language="javascript">window.location="../seguridad/restaurar.php?mensaje=1"</script>;';
			}

$query = "UPDATE user SET password = '$encriptada' WHERE email = '$correo'";
		$ok = $base->exec($query);
		if ($ok == FALSE) {
				echo '<script language="javascript">window.location="../seguridad/restaurar.php?mensaje=2"</script>;';
			}
			else{
				$para = $correo;
				$titulo = 'Contraseña restaurada';
				$mensaje = 'Hola, bienvenido a siseepv \r\n tu nueva contraseña es '.$var1; //Mensaje de 2 lineas
				$cabeceras = 'From: webmaster1@siseepv.com' . "\r\n" . //La direccion de correo desde donde supuestamente se envió
				    'Reply-To: webmaster2@siseepv.com' . "\r\n" . //La direccion de correo a donde se responderá (cuando el recepto haga click en RESPONDER)
				    'X-Mailer: PHP/' . phpversion();  //información sobre el sistema de envio de correos, en este caso la version de PHP
				 
				mail($para, $titulo, $mensaje, $cabeceras);
				echo '<script language="javascript">window.location="../seguridad/restaurar.php?mensaje=3"</script>;';
			}
 ?>