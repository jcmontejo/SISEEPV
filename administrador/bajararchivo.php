<?php 
	/*Checamos si existe el valor de id que nos llega con el metodo $_GET*/
	if(isset($_GET['var']))
	{
		include('conexion.php');
		$id = $_GET['var'];

		$resultado = $base->query("SELECT *FROM file_project WHERE project_id = $id");
		while ($datos = $resultado->fetch()) {
			$name = $datos['name'];
			$type = $datos['type'];
			$size = $datos['size'];
			$content = $datos['content'];
			header("Content-length: $size");
			header("Content-type: $type");
			header("Content-Disposition: attachment; filename = $name");
			echo $content;
		}
	}

 ?>