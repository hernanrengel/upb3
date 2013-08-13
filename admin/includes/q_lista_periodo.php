<?php 

	require_once("../conexion/conexion.php");
	$sql_lista_periodo="SELECT * FROM upb_periodo";
	$res_lista_periodo=mysql_query($sql_lista_periodo,$con);
		
?>