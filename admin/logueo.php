<?php
session_start();
require_once("../conexion/conexion.php");

$nombre_user=$_POST['nombre_user'];
$password=$_POST['password'];
$sql="SELECT nombre_user FROM upb_usuario WHERE nombre_user='$nombre_user'";
$res=mysql_query($sql, $con);

if (mysql_num_rows($res) == 0)
{
		echo "<script type='text/javascript'>
					alert('EL usuario ".'"'.$nombre_user.'"'." no existe en la base de datos');window.location='index.php';
				</script>
		";
}else
{
	$consulta="SELECT * FROM upb_usuario WHERE nombre_user='$nombre_user' AND password='$password'";
	$result=mysql_query($consulta, $con);
	
		if (mysql_num_rows($result) == 0)
			{
				echo "<script type='text/javascript'>
							alert('EL usuario y el password no coinciden');window.location='index.php';
						</script>
				";	
			}else
				{
					$_SESSION["usuario"]=$nombre_user;
					header("Location: main.php");	
				}
	}
?>