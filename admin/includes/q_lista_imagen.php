<?php 

	require_once("../conexion/conexion.php");
	$sql_lista_imagen="SELECT * FROM upb_imagen";
	$res=mysql_query($sql_lista_imagen,$con);
		
?>