<?php 
		require_once("header.php");
		require_once("includes/q_lista_slider.php");
		require_once("includes/q_cuenta_sliders.php");
?>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<?php
    	
			if (isset($_GET["pos"]))
				{
					$inicio=$_GET["pos"];
				}
				else
				{
					$inicio=0;
				}			
	//********** Variables para la paginacion
		 $reg_cuenta_sliders=mysql_fetch_array($res_cuenta_sliders);
		$total=$reg_cuenta_sliders["cuantos"]; 
				$num=$total / 10;
				$resto=$total % 10;
				$ultimo=$total - $resto;
	?>
    <div id="page-heading">
		<h1>Listado de Sliders</h1>
    	<h3>Total de Registros: "<strong><?php echo $total;?></strong>"</h3>
    </div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">	
		 
				<!--  start product-table ..................................................................................... --> 					
                
                
                
                <?php	
						if (isset($_GET["e"]))
						{
							
							switch ($_GET["e"])
								{
									
									case '1':
									?>
                                    <!--  start message-green -->
                                    <div id="message-green">
                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="green-left">Slider <strong>eliminado</strong> con exito.</td>
                                        <td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
                                    </tr>
                                    </table>
                                    </div>
                                    <!--  end message-green -->
                                    <?php 
									break;
									
									case '2':
									?>
                                    <!--  start message-red -->
                                    <div id="message-red">
                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="red-left">No se pudo <strong>eliminar</strong> el slider, Por favor intentelo una vez mas. </td>
                                        <td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
                                    </tr>
                                    </table>
                                    </div>
                                    <!--  end message-red -->
                                    <?php 
									break;
									
									
									
									case '4':
									?>
                                    <!--  start message-green -->
                                    <div id="message-green">
                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="green-left">Slider insertado con exito.</td>
                                        <td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
                                    </tr>
                                    </table>
                                    </div>
                                    <!--  end message-green -->
                                    <?php 
									break;
								}	
						}

				?>

					<?php				
						if (isset($_GET["m"]))
						{
							
							switch ($_GET["m"])
								{
									
									case '1':
									?>
                                    <!--  start message-green -->
                                    <div id="message-green">
                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="green-left">Datos de slider <strong>modificados</strong> con Exito!.</td>
                                        <td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
                                    </tr>
                                    </table>
                                    </div>
                                    <!--  end message-green -->
                                    <?php 
									break;
									
									case '2':
									?>
                                    <!--  start message-red -->
                                    <div id="message-red">
                                    <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="red-left">Error al <strong>modificar</strong> los datos del slider, Por favor intentelo una vez mas. </td>
                                        <td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
                                    </tr>
                                    </table>
                                    </div>
                                    <!--  end message-red -->
                                    <?php  
									break;
								}	
						}
			
				?>
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><a id="toggle-all" ></a> </th>
                    <th class="table-header-repeat line-left"><a href="">Visible?</a></th>
					<th class="table-header-repeat line-left"><a href="">Tipo Slider</a></th>
					<th class="table-header-repeat line-left"><a href="">Titulo Slider</a></th>
                    <th class="table-header-repeat line-left"><a href="">Nombre Slider</a></th>
					<th class="table-header-repeat line-left"><a href="">Imagen Slider</a></th>
                    <th class="table-header-repeat line-left"><a href="">Descripcion Slider</a></th>
					<th class="table-header-repeat line-left"><a href="">Opciones</a></th>
				</tr>
					<?php 
					$cont=0;
					while ($reg_lista_slider=mysql_fetch_array($res_lista_slider)) {
						
					$cont++;	?>
                <tr <?php if ($cont%2==0){ echo 'class="alternate-row"';}else{echo '';}?>>
					<td><input  type="checkbox"/></td>
                    <td <?php if (($reg_lista_slider['visible'])=='1'){echo 'style="color:#92B226";font-weight:bold;';}else{echo 'style="color:#C30;font-weight:bold;"';}?>><?php if ($reg_lista_slider['visible']==1){echo 'Visible';}else{echo 'No Visible';}?></td>
                    <td><?php echo $reg_lista_slider['tipo_slider'];?></td>
					<td><?php echo $reg_lista_slider['titulo_slider'];?></td>
                    <td><?php echo $reg_lista_slider['nombre_slider'];?></td>
					<td align="center"><img src="<?php echo $base_url."admin/uploads_sliders/".$reg_lista_slider['nombre_slider'];?>" width="150" height="100"/></td>
					<td width="270"><textarea name="" cols="30" rows="5" readonly="readonly"><?php echo $reg_lista_slider['descripcion_slider'];?></textarea></td>
					
					<td>
					<a href="edita_slider_form.php?id=<?php echo $reg_lista_slider['idupb_slider'];?>" title="Editar Slider" class="icon-1 info-tooltip"></a>
					<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg_lista_slider["idupb_slider"];?>')" title="Eliminar Slider" class="icon-2 info-tooltip"></a>
					<a href="q/edita_muestra_slider.php?v=<?php echo $reg_lista_slider['visible'];?>&id=<?php echo $reg_lista_slider['idupb_slider'];?>" title="Mostrar Slider" class="icon-5 info-tooltip"></a>
                    </td>
				</tr>
				 <?php } ?>
                </table>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
			<div id="actions-box">
				<a href="" class="action-slider"></a>
				<div id="actions-box-slider">
					<a href="" class="action-edit">Edit</a>
					<a href="" class="action-delete">Delete</a>
				</div>
				<div class="clear"></div>
			</div>
			<!-- end actions-box........... -->
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
				<a href="" class="page-far-left"></a>
				<a href="" class="page-left"></a>
				<div id="page-info">Page <strong>1</strong> / 15</div>
				<a href="" class="page-right"></a>
				<a href="" class="page-far-right"></a>
			</td>
			<td>
			<select  class="styledselect_pages">
				<option value="">Number of rows</option>
				<option value="">1</option>
				<option value="">2</option>
				<option value="">3</option>
			</select>
			</td>
			</tr>
			</table>
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>


<!--  end content-outer........................................................END -->
  <script language="javascript" type="text/javascript">
	function eliminar(id)
	{
		if (confirm("Realmente desea eliminar el Usuario?"))
		{
			window.location="q/elimina_slider.php?id="+id;
		}
	}
</script>
<?php require_once("footer.php");?>