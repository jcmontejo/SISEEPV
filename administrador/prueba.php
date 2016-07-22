<?php 
	include('conexion.php');

	$sql = $base->query("SELECT * FROM user WHERE type = 1");
	$print = $sql->rowCount();
	echo $print;
	echo "<br>";
	//
	$sql1 = $base->query("SELECT * FROM user WHERE type = 4");
	$print1 = $sql1->rowCount();
	echo $print1;
 ?>