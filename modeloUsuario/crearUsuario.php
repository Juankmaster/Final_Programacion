
<!-- Codigo para crear Usuarios en el submenu usuarios del menu Ajustes -->
<?php

include '../modelo/modelo_rol.php';
 		    $rol=new Roles();
		   $resultados= $rol->listado_roles();

 ?>

 <form id="fnusuarios" role="form" class="form-horizontal">
		<div class="panel-group">
			<div class="panel panel-primary" >
			
				<div class="panel-body">
				
				<!-- <div class="form-group">
				<label  for="id_usuario" class="hide"> Id Usuario </label>
				<input type="text" size="18px" readonly="true" value="<?php echo trim($resultado[0]['id_usuario']);?>" name="id_usuario" class="hide">
				</div> -->

				<div class="form-group">
				 <label  for="nom_usuario" class="control-label col-sm-2">Nombre:</label>
				  <div class="col-sm-10">
				   <input type="text"  class="form-control" name="nom_usuario">
				  </div>
				</div>

				<div class="form-group">
				 <label  for="email_usuario" class="control-label col-sm-2">Email:</label>
				  <div class="col-sm-10">
				   <input type="email" class="form-control" name="email_usuario">
				  </div>
				</div>

				<div class="form-group">
				 <label  for="clave_usuario" class="control-label col-sm-2">Clave:</label>
				  <div class="col-sm-10">
				   <input type="password" class="form-control" name="clave_usuario">
				  </div>
				</div>

				<div class="form-group">
				  <label  for="rol_usuario" class="control-label col-sm-2">Rol:</label>
				   <div class="col-sm-10">
				    <select name="rol_usuario" class="form-control">

					<?php foreach ($resultados as $row) {?>
					<option value="<?php echo trim($row['id_rol']); ?>">
						<?php echo trim($row['Nom_Rol']); ?>
					</option>
					<?php } ?> 
					
			        </select>
				</div>
				</div>
				 <div class="form-group">        
                   <div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Crear" id="crear_usuario" value="Crear">
                  <button type="button" id="cerrar" class="btn btn-success cerrar" data-toggle="tooltip" title="Cancelar">Cancelar</button>
				<input type="hidden"  name="accion" value="crear_usuario"/>
                  
                   </div>
                 </div>

			</div>
		</div>
	</form> 
	</div>  
	<!--  // funcion principal de jquery -->
	<script language="javascript">
	 
			$(document).ready(Inicio);
	</script> 

	<!-- <form method="post" id="f_n_usuario">
		<div class="panel-group">
			
			<div class="panel panel-primary" style="width:600px;">
			<div class="panel-heading" style="background:#0971B3">
				Editar Rol
			</div>
				<div class="panel-body">
				</div>
				  <div class="form-group">
				   <label  for="nom_usuario">Nombre &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</label>
				   <input type="text" size="18px" name="nom_usuario">
				</div>
				<div class="form-group">
				  <label  for="email_usuario">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
				  <input type="email" size="18px" name="email_usuario">
				</div>
				<div class="form-group">
				  <label  for="pass_usuario">Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
				  <input type="password" size="18px" name="pass_usuario">
				</div>
				<div class="form-group">
				  <label  for="rol_usuario">Rol &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</label>
				  <select name="rol_usuario">
				  							<option value="" selected>Seleccione ...</option>
				    					<?php foreach ($resultados as $row) {?>
				    						 <option  value="<?php echo trim($row['id_Rol']); ?>">
				    						 <?php 	echo utf8_encode(trim($row['Nom_Rol'])) ; ?>
				    					   </option>
				    				<?php }  ?>
				    </select>
				</div>
				  <input type="submit" class="btn btn-primary " id="crear_usuario" value="Crear">
				   <input type="button" class="btn btn-info " id="cancelar_usuario" value="Cancelar">
				  <br><br>
				  <input type="hidden"  name="accion" value="crear_usuario"/>
			</div>
		</div>
	</form> -->
	
<!-- </body>
</html> -->