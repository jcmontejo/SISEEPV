<?php 
	include('includes/conexion.php');
	try {

		$usu = $_GET['usuario'];

		$sql = "DELETE FROM catalogo_usuarios WHERE usuario = '$usu' ";
		$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo '<script language="javascript">window.location="historial.php?mensaje=2"</script>;';
			}
			else{
				echo '<script language="javascript">window.location="historial.php?mensaje=1"</script>;';
			}
		
	} catch (Exception $e) {
		
	die('Error : ' . $e->GetMessage());
		
	}
	finally{
		$base = null;
	}
 ?>