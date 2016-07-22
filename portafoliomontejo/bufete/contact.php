<?php
	/*$to      = 'jncrlsmontejo@gmail.com';
	$email   = $_POST['email'];

	$name  = $_POST['name'];
	$subject = $_POST['subject'];
	$message = $_POST['comments'];

	$headers = 'From: http://technext.github.io/Attorney/'. '<'.$email.'>' . "\r\n" .
		'Reply-To: '. $email . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	echo "<script>window.location.href = 'index.html';</script>";*/
	if(isset($_POST) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "jncrlsmontejo@gmail.com";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
!isset($_POST['subject']) ||
!isset($_POST['comments'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
   
?>