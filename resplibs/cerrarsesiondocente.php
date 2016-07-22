<?php 
session_start();
  	unset($_SESSION["docente"]); 
  	unset($_SESSION["passdocente"]);
  	session_destroy();
	echo '<script language="javascript">window.location="../index.php"</script>;';
	exit;
 ?>	