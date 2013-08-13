<?php 

	require_once("../conexion/conexion.php");
	$sql_lista_submenu_contenido="SELECT * FROM upb_submenu_contenido";
	$res=mysql_query($sql_lista_submenu_contenido,$con);
		
?>