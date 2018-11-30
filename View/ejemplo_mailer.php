<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$correo = $_POST['email'];
$mensaje = $_POST['message'];
$nombre = $_POST['name'];

		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		
		//Server settings
		$mail->SMTPDebug = 3;                                 // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'elber.gonzales.parado12@gmail.com';                 // SMTP username
		$mail->Password = 'carlos.12';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

    //Recipients
		$mail->setFrom('elber.gonzales.parado12@gmail.com', 'Admisiones y Registro');
		$mail->addAddress($correo, $nombre);     // Add a recipient
		//$mail->addAddress($nombre);               // Name is optional
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');
		//Attachments
		//$mail->addAttachment($nomPdf);         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		//Content
		//$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Excusa';
		$mail->Body    = $mensaje;
		//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		//$mail->send();

		if(!$mail->send()) {
    		echo 'Error, mensaje no enviado';
    		//echo 'Error del mensaje: ' . $mail->ErrorInfo;
		} else {
    		echo 'El mensaje se ha enviado correctamente';
		}

?>