<?php 

	require_once("../conexion/conexion.php");
	$sql_lista_usuarios="SELECT * FROM upb_usuario";
	$res=mysql_query($sql_lista_usuarios,$con);
		
?>