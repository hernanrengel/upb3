<?php
//print_r($_POST);
require_once("../../conexion/conexion.php");

$idupb_usuario=$_POST["idupb_usuario"];
$nombre=$_POST["nombre"];
$apellido_p=$_POST["apellido_p"];
$apellido_m=$_POST["apellido_m"];
$tipo_usuario=$_POST["tipo_usuario"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$nombre_user=$_POST["nombre_user"];
$password=$_POST["password"];



$sql="UPDATE upb_usuario
SET
nombre='$nombre',
apellido_p='$apellido_p',
apellido_m='$apellido_m',
tipo_usuario='$tipo_usuario',
email='$email',
telefono='$telefono',
nombre_user='$nombre_user',
password='$password'


WHERE
idupb_usuario=".$_POST["idupb_usuario"]."

"
;
//echo $sql;

$res=mysql_query($sql,$con);

header("Location: "."../lista_usuarios.php?m=1");

?>