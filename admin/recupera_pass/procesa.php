<?php
require_once("class.phpmailer.php");

$mail = new PHPMailer();

//$mail->Host("http://curso.cesarcancino.com");
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$mensaje=$_POST['mensaje'];

	//***************************************
	//configuramos la información del correo o email
	$mail->From = "$correo";
    $mail->FromName = "$nombre";
    $mail->Subject = "Consulta de la Pagina Advice.bo";
    $mail->AddAddress("javergara@advice.bo",utf8_decode($nombre));
  //  $mail->AddAddress("destino2@correo.com","Nombre 02");
    //$mail->AddCC("usuariocopia@correo.com");
    //$mail->AddBCC("usuariocopiaoculta@correo.com");
	
	//******************************+
	//configuramos el cuerpo del mensaje
	 
	 $body  = " Hola Recibio una Consulta de:<br><br>";
	 $body.= " Nombre: $nombre<br><br> ";
	 $body.= " E-Mail: $correo<br><br><br><br> ";
	 $body.= " Mensaje: $mensaje<br><br>";
	 
	 $mail->Body = $body;
	 $mail->AltBody = "$mensaje";
	 
	 //hacemos el upload del archivo
	 
	 $mail->Send();
	 
	 
	 header("Location: ../contacto.php?m=1");
	 
	 
	 
	 
	 
   	 
	 
	
?>