<?php 

	require_once("../conexion/conexion.php");
	$sql_lista_menu_contenido="SELECT * FROM upb_menu_contenido";
	$res=mysql_query($sql_lista_menu_contenido,$con);
		
?>