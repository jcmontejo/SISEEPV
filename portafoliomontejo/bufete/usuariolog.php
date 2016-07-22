<?php 
	include('includes/conexion.php');
	$user = $_POST['txtuser'];
	$pass = $_POST['txtpass'];
	/*encriptamos contraseña de usuario para compararla con la de la BD*/
	$encriptada = sha1($pass);

		try {
		    $resultado = $base->query("SELECT * FROM catalogo_usuarios WHERE usuario = '$user' AND pass = '$encriptada' ");
			$numero_registro = $resultado->rowCount();
			$datos = $resultado->fetch(); 
			$nivel = $datos['nivel_acceso'];

			if ($numero_registro != 0) {
				# code...
				session_start();
				/*Redireccionamos al usuario al panel Admin*/
				if ($nivel == 1) {
					# code...
					/*Iniciamos la sesion*/
					$_SESSION['usuarioadmin'] = $datos['usuario'];
					$_SESSION['passadmin'] = $datos['pass'];
					echo '<script language="javascript">window.location="admin.php"</script>;';
				}
				    
				if ($nivel == 2) {
					# code...
					/*Iniciamos la sesion*/
					$_SESSION['usuario'] = $datos['usuario'];
					$_SESSION['pass'] = $datos['pass'];
					echo '<script language="javascript">window.location="vista_cliente.php"</script>;';
				}
				 	

				
			} else {
				# code...
				/*Redireccionamos al usuario a login nuevamente ya que su usuario es incorrecto*/
				echo '<script language="javascript">window.location="login.php?mensaje=1"</script>;';
			}
			$resultado->closeCursor();
			
			
		} catch (Exception $e) {
			/* Mensaje en caso de error */
			die('Error : '.$e->GetMessage());
			
		} finally
		{
			$base = null;
		}
	 ?>
	