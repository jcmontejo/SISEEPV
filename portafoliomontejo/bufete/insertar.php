<?php session_start(); ?>
<?php include('includes/header.html'); ?>
<?php 
	echo "<br><br><br>";
	echo "Has iniciado sesion correctamente ". $_SESSION['nombre'];
	echo "<br><br>";
 ?>
<form action="verificarinsersion.php" method="POST">
	<label for="txtid">Introduce Identificador de cliente: </label><input type="text" name="txtid"><br><br>
	<label for="txtuser">Introduce nombre de usuario de cliente: </label><input type="text" name="txtuser"><br><br>
	<label for="txtpass">introduce contraseña de cliente: </label><input type="text" name="txtpass"><br><br>
	<label for="txtnombre">Introduce nombre de cliente: </label><input type="text" name="txtnombre"><br><br>
	<label for="txtapellidos">Introduce apellidos de cliente: </label><input type="text" name="txtapellidos"><br><br>
	<label for="txtedad">Introduce edad de cliente: </label><input type="text" name="txtedad"><br><br>
	<label for="txtemail">Introduce correo electronico de cliente: </label><input type="text" name="txtemail"><br><br>
	<label for="txtdireccion">introduce dirección de cliente: </label><input type="text" name="txtdireccion"><br><br>
	<label for="txtadmin">Introduce identificador del administrador: </label><input type="text" name="txtadmin"><br>
	<br>
	<input type="submit" name="enviar" value="Guardar"><br><input type="reset" value="limpiar"><br>
</form>
<br>
<?php 
	if (isset($_GET['mensaje']) && $_GET['mensaje'] == 1) {
		# code...
		echo "<span style='color:#ff0000'>Datos guardados exitosamente</span>";
	}
	if (isset($_GET['mensaje']) && $_GET['mensaje'] == 2) {
		# code...
		echo "<span style='color:#ff0000'>Uno de los campos esta vacio</span>";
	}
	if (isset($_GET['mensaje']) && $_GET['mensaje'] == 3) {
		# code...
		echo '<script language="javascript">Ya existe un cliente con el mismo id y usuario</script>;';
	}
 ?>

 <?php include('includes/footer.html'); ?>
