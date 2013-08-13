<?php
require_once("../../conexion/conexion.php");
$nombre=$_POST["nombre"];
$apellido_p=$_POST["apellido_p"];
$apellido_m=$_POST["apellido_m"];
$tipo_usuario=$_POST["tipo_usuario"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$nombre_user=$_POST["nombre_user"];
$password=$_POST["password"];
//acá insertamos a la persona
$sql="INSERT INTO upb_usuario VALUES (null, '$tipo_usuario', '$nombre', '$apellido_p', '$apellido_m', '$email', '$telefono', '$nombre_user', '$password')"; 
	
	//echo $sql;
$res=mysql_query($sql,$con);
	
	
	header("Location: "."../inserta_usuario_form.php?m=1");

?>
