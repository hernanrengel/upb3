<?php 

	require_once("../conexion/conexion.php");
	$sql_cuenta_sliders="select count(*) as cuantos from upb_slider";
	$res_cuenta_sliders=mysql_query($sql_cuenta_sliders,$con);
		
?>