<?php 
	include('includes/conexion.php');
	try {

		$matri = $_GET['matricula'];

		$sql = "DELETE FROM cliente WHERE matricula = '$matri' ";
		$ok = $base->exec($sql);
			if ($ok == FALSE) {
				# code...
				echo '<script language="javascript">window.location="historial.php?mensaje1=2"</script>;';
			}
			else{
				echo '<script language="javascript">window.location="historial.php?mensaje1=1"</script>;';
			}
		
	} catch (Exception $e) {
		
	die('Error : ' . $e->GetMessage());
		
	}
	finally{
		$base = null;
	}
 ?>