<?php 
	session_start();
  	unset($_SESSION["empresa"]); 
  	unset($_SESSION["passempresa"]);
  	session_destroy();
	echo '<script language="javascript">window.location="../index.php"</script>;';
	exit;
 ?>