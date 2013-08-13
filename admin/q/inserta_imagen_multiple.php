<?php 
 		require_once("../../conexion/conexion.php");
 
		$periodo=$_POST['periodo'];
 
		$query = 'INSERT INTO upb_imagen (idupb_imagen, tipo_imagen, periodo, nombre_imagen, descripcion_imagen) VALUES';
   
   //Obtenemos los datos uno a uno
   $i=0;
         for($i=1; $i <=count($_POST['nombre_imagen']); $i++) {
          
      $i++;
      
              $query.="(null, 'periodo' , '$periodo','".$_POST["nombre_imagen"][$i]."', null),"; 
      
       
   }
   
   $query = substr($query,0,(strlen($query)-1)).';';
   
  echo $query; 
   
  // mysql_query($query, $turismo_conn);
 ?>