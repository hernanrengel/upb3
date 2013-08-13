<?php
require_once("../../conexion/conexion.php");
$nombre_periodo=$_POST["nombre_periodo"];
$descripcion=$_POST["descripcion"];

//acá insertamos a la persona
$sql="INSERT INTO upb_periodo VALUES (null, '$nombre_periodo', '$descripcion')"; 
	
	//echo $sql;
$res=mysql_query($sql,$con);
	
	
	header("Location: "."../inserta_imagen_form.php?m=1");

?>
