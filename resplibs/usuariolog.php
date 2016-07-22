<?php 
	include('../conexion/conexion.php');
	$email = $_POST['email'];
	$pass = $_POST['password'];
	/*encriptamos contraseña de usuario para compararla con la de la BD*/
	$encriptada = sha1($pass);
	

		try { 
		    $resultado = $base->query("SELECT * FROM user WHERE email = '$email' AND password = '$encriptada' ");
			$numero_registro = $resultado->rowCount();
			$datos = $resultado->fetch(); 
			$tipo = $datos['type'];
				
				
			if ($numero_registro != 0) {
				# code...
				session_start();
			
				if ($tipo == 1) {
				
					$_SESSION['idegresado'] = $datos['id'];
					$_SESSION['egresado'] = $datos['name'];
					$_SESSION['emailegresado'] = $datos['email'];
					$_SESSION['passegresado'] = $datos['password'];
					echo '<script language="javascript">window.location="../egresado/home.php"</script>;';
				}
				    
				if ($tipo == 2) {
					
					$_SESSION['empresa'] = $datos['name'];
					$_SESSION['passempresa'] = $datos['password'];
					$_SESSION['idempresa'] = $datos['id'];
					$_SESSION['emailempresa'] = $datos['email'];
					echo '<script language="javascript">window.location="../empresas/home.php"</script>;';
				}
				if ($tipo == 3) {
					
					$_SESSION['docente'] = $datos['name'];
					$_SESSION['iddocente'] = $datos['id'];
					$_SESSION['passdocente'] = $datos['password'];
					echo '<script language="javascript">window.location="../proyectos/home.php"</script>;';
				}
				if ($tipo == 4) {
					echo '<script language="javascript">window.location="../administrador/index.php"</script>;';
				}
				 	

				
			} else {
				
				echo '<script language="javascript">window.location="../seguridad/login.php?mensaje=1"</script>;';
			}
			$resultado->closeCursor();
			
			
		} catch (Exception $e) {
		
			die('Error : '.$e->GetMessage());
			
		} 
	 ?>
	