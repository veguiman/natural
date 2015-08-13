<?php
require 'PHPMailer/PHPMailerAutoload.php';

//Instancion a PHPMailer
$mail = new PHPMailer;

//Direccion de Email del destinatario
$to = "redzilla@gmail.com"; 

// recogeremos los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['message'];

//Validamos que los campos no esten vacios o nulos
if($nombre == " " || $email == " " || $mensaje== " "):
	echo '<div class="alert alert-block alert-danger">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	Todos los campos son requeridos para el envio</div>';
else:
	//Estrcutura del mensaje usando mail
	$mail->From = $email;
	$mail->FromName = $nombre;
	$mail->addAddress($to);
	$mail->Subject = "Mensaje Natural Way";
	$mail->isHtml(true);
	$mail->Body = 'La siguiente persona: <strong>'.$nombre.'</strong> Ha dejado el siguiente mensaje</br></br>'.'<strong>Mensaje:</strong>'.' '.$mensaje.'</br></br>';

	$mail->CharSet = 'UTF-8';
	$mail->send();

	//Respuesta 
	echo '<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Mensaje enviado correctamente.</strong></div>';
	
endif;

?>
