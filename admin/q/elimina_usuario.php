<?php
require_once("../../conexion/conexion.php");
$sql="DELETE from upb_usuario
WHERE
idupb_usuario=".$_GET["id"]."";

//echo $sql;
$res=mysql_query($sql,$con);

header("Location: "."../lista_usuarios.php?e=1");

?>