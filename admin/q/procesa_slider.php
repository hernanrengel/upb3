<?php 
require_once("../../conexion/conexion.php");
$foto=$_FILES["foto"]["name"];
$temp=$_FILES["foto"]["tmp_name"];
$tamano=$_FILES["foto"]["size"];
$tipo=$_FILES["foto"]["type"];
//Validamos el tamaño de la imagen
$size = GetImageSize("$temp");
$anchura=$size[0]; 
$altura=$size[1]; 

if (($anchura != 940) and ($altura != 350))
{
	header("Location: "."../inserta_slider_form.php?e=1");	
	
	}else 
	{


$kilobytes=$tamano/1024;//con esto temenos la cantidad en kb
//$mega=$kilobytes/1024;


if ($kilobytes > 1024)
{
	header("Location: "."../inserta_slider_form.php?e=2");	
	
	}

	
if ($tipo=="image/png" or $tipo=="image/jpeg")
{
	switch ($tipo)
{
	case 'image/png':
		$ext=".png";
	break;
	case 'image/jpeg':
		$ext=".jpg";
	break;
}
//$nombre_foto=$_POST["nom"].$ext;
$nombre_foto=$_POST["nombre_slider"];
$nombre_foto=str_replace(" ","_",$nombre_foto);
$nombre_foto=$nombre_foto.$ext;
copy($temp,"../uploads_sliders/$nombre_foto");
//**************************************************************************
//Ahora guardamos el archivo en una tabla de la base de datos
$titulo_slider=$_POST['titulo_slider'];
$tipo_slider=$_POST["tipo_slider"];
$descripcion=$_POST["descripcion"];
$sql="INSERT INTO upb_slider
VALUES
(null,'$tipo_slider', '$titulo_slider', '$nombre_foto', '$descripcion', '0')
";
$res=mysql_query($sql,$con);
header("Location: "."../lista_sliders.php?e=4");
}else
{
	header("Location: "."../inserta_slider_form.php?e=3");
}

	
	}
?>