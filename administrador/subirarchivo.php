<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Subir</title>
</head>
<body>
<form action="cargarimg.php" method="POST" enctype="multipart/form-data">
	<label>Nombre de evento:</label>
	<input type="text" name="name">
	<br>
	<label>Descripción del evento:</label>
	<input type="text" name="description">
	<br>
	<label>Lugar del evento:</label>
	<input type="text" name="place">
	<br>
	<label>Fecha de evento:</label>
	<input type="date" name="date">
	<br>
	<input type="file" name="archivo">
	<br>
	<input type="submit" value="cargar">
</form>
</body>
</html>