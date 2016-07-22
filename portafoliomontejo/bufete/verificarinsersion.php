<?php 
include('includes/conexion.php');
		# code...
		$matricula = $_POST['txtmatricula'];
		$nombre = $_POST['txtnombre'];
		$apellidos = $_POST['txtapellidos'];
		$email = $_POST['txtmail'];
		$numero = $_POST['txtnumero'];
		$direccion = $_POST['txtdireccion'];
		$usuario = $_POST['txtusuario'];
		try {
			if ($matricula == "" || $nombre == "" || $apellidos == "" || $email == "" || $numero == "" || $direccion == "" || $usuario == "" ) {
				# code...
				echo '<script language="javascript">window.location="nuevocliente.php?mensaje=2"</script>;';
				exit();
			}
			$comprobar = $base->query("SELECT * FROM cliente WHERE matricula = '$matricula' AND catalogo_usuarios_usuario = '$usuario' ");
            $checar = $comprobar->rowCount();
			if ($checar != 0) {
				# code...
				echo '<script language="javascript">window.location="nuevocliente.php?mensaje=3"</script>;';
				exit();

			}
			/*Preparamos la insersion*/
			$sql = "INSERT INTO cliente (matricula,nombre,apellidos,correo,numero_telefono,direccion,catalogo_usuarios_usuario) 
			VALUES ($matricula,'$nombre','$apellidos', '$email', '$numero','$direccion','$usuario')";
			/*Añadimos los datos a la tabla*/
			$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo "<span style='color:#ff0000'>Error en la ejecucion de la consulta</span>";
			}
			else{
				echo '<script language="javascript">window.location="nuevocliente.php?mensaje=1"</script>;';
			}
			
			
		} catch (Exception $e) {
			/*Mensaje de error*/
			die('Error : ' . $e->GetMessage());
			
		}
		finally{
			$base = null;
		}
	
 ?>