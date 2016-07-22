<?php 
	try {
			$base = new PDO('mysql:host=localhost; dbname=siseepv', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
			$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			
		
	} catch (Exception $e) {
		die('Error: ' .$e->GetMessage());
	}
 ?>