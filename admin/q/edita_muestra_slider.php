<?php
//print_r($_POST);
require_once("../../conexion/conexion.php");

$id=$_GET['id'];
$v=$_GET['v'];



if ($v=='1')
	{
		$sql="UPDATE upb_slider
		SET
		visible='0'
		WHERE
		idupb_slider='$id'
		";
		$res=mysql_query($sql,$con);
		
		header("Location: "."../lista_sliders.php");	
	}
else
	{
		$sql="UPDATE upb_slider
		SET
		visible='1'
		WHERE
		idupb_slider='$id'
		";
		$res=mysql_query($sql,$con);
		
		header("Location: "."../lista_sliders.php");		
	}
?>