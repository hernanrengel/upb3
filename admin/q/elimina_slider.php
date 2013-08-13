<?php
require_once("../../conexion/conexion.php");
$sql="DELETE from upb_slider
WHERE
idupb_slider=".$_GET["id"]."";

//echo $sql;
$res=mysql_query($sql,$con);

header("Location: "."../lista_sliders.php?e=1");

?>