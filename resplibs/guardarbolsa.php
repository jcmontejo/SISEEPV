<?php 
include('../conexion/conexion.php');

			$sentencia = "SELECT * FROM  social_service";
			$query = mysql_query("$sentencia");

			while ($arreglo = mysql_fetch_array($query)) {
				
				echo $arreglo['id'] ;
	 echo $arreglo['task'];			}
 			
?>