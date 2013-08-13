<?php 
		require_once("header.php");
			
			$id=$_GET['id'];
			$sql_edita_usuarios="SELECT * FROM upb_usuario WHERE idupb_usuario='$id'";
			$res=mysql_query($sql_edita_usuarios,$con);
			$reg=mysql_fetch_array($res);
		
?>
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading">
  <h1>Editar usuario</h1></div>


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
	<!--  start content-table-inner -->
	<div id="content-table-inner">
				
           
    <table border="0" width="100%" cellpadding="0" cellspacing="0">
	<form method="post" action="q/edita_usuario.php">
    <input name="idupb_usuario" type="hidden" value="<?php echo $reg["idupb_usuario"];?>"/>
    <tr valign="top">
	<td>
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Nombre:</th>
			<td><input name="nombre" type="text" class="inp-form" value="<?php echo $reg["nombre"];?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Apellido Paterno:</th>
			<td><input name="apellido_p" type="text" class="inp-form" value="<?php echo $reg["apellido_p"];?>" /></td>
		</tr>
		<tr>
        <tr>
			<th valign="top">Apellido Materno:</th>
			<td><input name="apellido_m" type="text" class="inp-form" value="<?php echo $reg["apellido_m"];?>" /></td>
		</tr>
		<th valign="top">Tipo Usuaruo:</th>
		<td>	
		  <p>
		    <select name="tipo_usuario" class="styledselect_form_1">
		      <option <?php if ($reg["tipo_usuario"]=='admin'){echo "selected";} ?> value="admin">Administrador</option>
		      <option <?php if ($reg["tipo_usuario"]=='user'){echo "selected";} ?>  value="user">Usuario</option>
		    </select>
		</td>
		<td></td>
		</tr>
		<tr>
			<th valign="top">Correo:</th>
			<td><input name="email" type="text" class="inp-form" value="<?php echo $reg["email"];?>" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Tel&eacute;fono:</th>
			<td><input name="telefono" type="text" class="inp-form" value="<?php echo $reg["telefono"];?>" /></td>
			<td></td>
		</tr>
        <tr>
			<th valign="top">Nombre de Usuario:</th>
			<td><input name="nombre_user" type="text" class="inp-form" value="<?php echo $reg["nombre_user"];?>" /></td>
			<td></td>
		</tr>
        <tr>
			<th valign="top">Contrase&ntilde;a:</th>
			<td><input name="password" type="text" class="inp-form" value="<?php echo $reg["password"];?>" /></td>
			<td></td>
		</tr>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="" class="form-submit" />
			<input name="" type="reset" class="form-reset" />
		</td>
		<td></td>
	</tr>
   	</form>
	</table>
 
	<!-- end id-form  -->

	</td>
	<td>

	<!--  start related-activities -->
	<div id="related-activities">
		
		<!--  start related-act-top -->
		<div id="related-act-top">
		<img src="images/forms/header_related_act.gif" width="271" height="43" alt="" />
		</div>
		<!-- end related-act-top -->
		
		<!--  start related-act-bottom -->
		<div id="related-act-bottom">
		
			<!--  start related-act-inner -->
			<div id="related-act-inner">
			
				<div class="left"><a href=""><img src="images/forms/icon_plus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Add another product</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				
				<div class="left"><a href=""><img src="images/forms/icon_minus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Delete products</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				
				<div class="left"><a href=""><img src="images/forms/icon_edit.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Edit categories</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				<div class="clear"></div>
				
			</div>
			<!-- end related-act-inner -->
			<div class="clear"></div>
		
		</div>
		<!-- end related-act-bottom -->
	
	</div>
	<!-- end related-activities -->

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
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
<!--  end content-outer -->

<div class="clear">&nbsp;</div>
    
<?php require_once("footer.php");?>