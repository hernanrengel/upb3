<?php 
	
	require_once("conexion/conexion.php");

	$carrera=1;
   

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		#nt{
			margin: 5px;
			font-weight: 800;
			font-size: 2em;
		}
		body{
			font-family: verdana;
			font-size: 13px;
		}
		.nombre{
			width: 450px;
			font-size: 1.3em;
			padding-left: 20px;
			padding-right: 20px;
		}
		.grados{
			width: 450px;
			font-size: 1.3em;
			padding-left: 20px;
			padding-right: 20px;
		}
		.actividad{
			width: 450px;
			font-size: 1.3em;
			padding-left: 20px;
			padding-right: 20px;
		}
		hr{
			border: 0;
		    height: 2px;
		    margin: 10px;
		    background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
		    background-image:    -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
		    background-image:     -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
		    background-image:      -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
		}ç
		#celda{
			min-width: 300px;
			text-align: center;
		}
	</style>
	<?php 
		$sql="SELECT * FROM upb_graduados";
	    //echo $sql; 
	    $res=mysql_query($sql, $con);?>
		<title></title>
	</head>
	<body>	

		<table>	
			<tr id="celda">	
				<td>Estudiante</td>
			</tr>
			<?php while ($reg=mysql_fetch_array($res)) {?>
			<tr id="celda">
				<td><?php echo utf8_encode($reg['estudiante']); ?></td>
			</tr>
			<?php } ?>
		</table>

	</body>
</html>