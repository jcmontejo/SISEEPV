<?php 
	session_start();
  	unset($_SESSION["egresado"]); 
  	unset($_SESSION["passegresado"]);
  	session_destroy();
	echo '<script language="javascript">window.location="../index.php"</script>;';
	exit;
 ?>