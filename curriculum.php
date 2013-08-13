<?php 
	
	require_once("conexion/conexion.php");

	$id=$_GET['ask'];
   

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
		}
	</style>
	<?php if ($id==0){ ?>
		<span id="nt">Datos no Disponibles</span>
	<?php }else {
		$sql="SELECT * FROM upb_plantel WHERE idupb_plantel='$id'";
	    $res=mysql_query($sql, $con); 
		while ($reg=mysql_fetch_array($res)) { ?>
		<title>Curriculum <?php echo utf8_encode($reg['nombre']); ?></title>
	</head>
	<body>	

			<span id="nt">Nombre</span>
			<div class="nombre">
				<?php echo utf8_encode($reg['nombre']); ?>
			</div>
			<hr>
			<span id="nt">Grados Acad&eacute;micos</span>
			<div class="grados">
				<?php echo utf8_encode($reg['grados_academicos']); ?>
			</div>
			<hr>
			<span id="nt">Actividad Profesional</span>
			<div class="actividad">
				<?php echo utf8_encode($reg['actividad_profesional']); ?>
			</div>
		<?php }
		} ?>
	
</body>
</html>