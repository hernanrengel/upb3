<?php 

	require_once("../conexion/conexion.php");
	$sql_lista_post="SELECT * FROM upb_post";
	$res=mysql_query($sql_lista_post,$con);
		
?>