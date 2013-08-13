<?php 

	require_once("../conexion/conexion.php");
	$sql_lista_menu_principal="SELECT * FROM upb_menu_principal";
	$res=mysql_query($sql_lista_menu_principal,$con);
		
?>