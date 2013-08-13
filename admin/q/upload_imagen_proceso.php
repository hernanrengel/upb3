<?php

// aca ponemos el directorio donde se guardaran las imagenes.
$uploaddir = 'images/';

// datos publicados para referencia 
$file = $_POST['value'];
$name = $_POST['name'];

// obtener el mio
$getMime = explode('.', $name);
$mime = end($getMime);

// separar los datos
$data = explode(',', $file);

// Encode it correctly
$encodedData = str_replace(' ','_',$data[1]);
$decodedData = base64_decode($encodedData);

// You can use the name given, or create a random name.
// We will create a random name!

/***ACA PONEMOS UN NOMBRE ALEATORIO***///$randomName = substr_replace(sha1(microtime(true)), '', 12).'.'.$mime;
/***CON ESTA PONEMOS EL NOBRE PROPIO DE LA IMAGEN***/$randomName = $name.'.'.$mime;

if(file_put_contents($uploaddir.$randomName, $decodedData)) {
	echo $randomName.":Subido con Exito!";
}
else {
	// Show an error message should something go wrong.
	echo "mmmmmm....... algo anda mal revise si el archivo esta corrupto.";
}


?>