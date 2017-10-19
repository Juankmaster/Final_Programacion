<?php 

 include '../modeloUsuario/modelo_usuario.php';
 			$id_usuario=$_POST["id_usuario"];
 		    $usuario=new Usuarios();
		   $resultado= $usuario->consultar_Usuario($id_usuario);	

		   include '../modelo/modelo_rol.php';
 		    $rol=new Roles();
		   $resultados= $rol->listado_roles();
 ?>

 <form id="fusuarios" role="form" class="form-horizontal">
		<div class="panel-group">
			<div class="panel panel-primary" >
			
				<div class="panel-body">
				
				<div class="form-group">
				<label  for="id_usuario" class="hide"> Id Usuario </label>
				<input type="text"  readonly="true" value="<?php echo trim($resultado[0]['id_usuario']);?>" name="id_usuario" class="hide">
				</div>

				<div class="form-group">
				 <label  for="nom_usuario" class="control-label col-sm-2">Nombre:</label>
				  <div class="col-sm-10">
				   <input type="text"  class="form-control" value="<?php echo trim($resultado[0]['Nom_Usuario']);?>" name="nom_usuario">
				  </div>
				</div>

				<div class="form-group">
				 <label  for="email_usuario" class="control-label col-sm-2">Email:</label>
				  <div class="col-sm-10">
				   <input type="email" class="form-control" value="<?php echo trim($resultado[0]['Email']);?>" name="email_usuario">
				  </div>
				</div>

				<div class="form-group">
				 <label  for="clave_usuario" class="control-label col-sm-2">Clave:</label>
				  <div class="col-sm-10">
				   <input type="password" class="form-control" value="<?php echo trim($resultado[0]['clave_usuario']);?>" name="clave_usuario">
				  </div>
				</div>

				<div class="form-group">
				  <label  for="rol_usuario" class="control-label col-sm-2">Rol:</label>
				   <div class="col-sm-10">
				    <select name="rol_usuario" class="form-control">

					<?php foreach ($resultados as $row) {
						if(trim($resultado[0]['id_rol']) == $row['id_rol']){
						?>
						<option selected value="<?php echo trim($row['id_rol']); ?>" >
								<?php echo utf8_encode(trim($row['Nom_Rol'])); ?> 
						</option>
						<?php }
						else{ 
						?>
						<option value="<?php echo trim($row['id_rol']); ?>">
							<?php echo trim($row['Nom_Rol']); ?>
						</option>
					<?php } } ?> 

						


			        </select>
				   </div>
				</div>
				<div class="form-group">        
                   <div class="col-sm-offset-2 col-sm-10">
				    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Actualizar" id="actualizar_usuario" value="Actualizar">
                    <button type="button" id="cerrar" class="btn btn-success cerrar" data-toggle="tooltip" title="Cancelar">Cancelar</button>
				    <input type="hidden"  name="accion" value="actualizar_usuario"/>
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
	
					

                  

				


		 




 	


