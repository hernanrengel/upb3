<?php
require_once("../../conexion/conexion.php");
$sql="DELETE from upb_post
WHERE
idupb_post=".$_GET["id"]."";

//echo $sql;
$res=mysql_query($sql,$con);

header("Location: "."../lista_posts.php?e=1");

?>