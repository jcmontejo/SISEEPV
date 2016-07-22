<!--
Autor: Juan Carlos Montejo 
Correo: jncrlsmontejo@gmail.com
-->
<!DOCTYPE html>
<html>
<head>
<title>Acceso a PLATDOC</title>
<link href="css/style_login.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Church Sign In Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
	<br><br>
		<div class="app-cross">
			<!--<div class="cross"><img src="images/bg_login.png" class="img-responsive" alt="" /></div>-->
			<h2>Iniciar sesión</h2>
			<form action="usuariolog.php" method="POST">
				<input type="text" class="text" value="Usuario" name="txtuser" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Usuario';}" >
				<input type="password" value="Contraseña" name="txtpass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contraseña';}">
				<div class="submit"><input type="submit" value="Entrar" name="inicio" ></div>
				<div class="clear"></div>
				<!--<h3><a href="#">Forgot Password ?</a></h3>-->
			</form>
			<?php 
			if (isset($_GET['mensaje']) && $_GET['mensaje'] == '1') {
				# code...
				echo "<span style='color:#fff'>Usuario incorrecto</span>";
			}
	         ?>
				<div class="buttons">
					<a href="index.html" class="hvr-shutter-in-vertical">regresar</a>
				</div>
					<!--<h4>New here ? <a href="#"> Sign Up</a></h4>-->
			
		</div>
	<!--start-copyright-->
   		<div class="copy-right">
				<p>Copyright &copy; 2015  todos los derechos reservados a <a href="index.html">Díaz Mandujano & Asociados</a></p>
		</div>
	<!--//end-copyright-->
</body>
</html>