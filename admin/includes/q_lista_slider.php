<?php 

	require_once("../conexion/conexion.php");
	$sql_lista_slider="SELECT * FROM upb_slider";
	$res_lista_slider=mysql_query($sql_lista_slider,$con);
		
?>