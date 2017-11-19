<?php 

 include '../modelo/modelo_rol.php';
		$id_rol=$_POST["id_rol"];
	    $rol=new Roles();
        $resultado= $rol->consultar_rol($id_rol);	
		 

 ?>
 	<form id="f_a_roles" role="form" class="form-horizontal">
		<div class="panel-group">
			<div class="panel panel-primary" >
			
			 <div class="panel-body">
				
			  <div class="form-group">
				<label  for="id_rol" class="control-label col-sm-2">Id Rol:</label>
				 <div class="col-sm-10">
				  <input type="text" class="form-control"  readonly="true" value="<?php echo trim($resultado[0]['id_rol']);?>" name="id_rol">
				 </div>
			  </div>

				<div class="form-group">
				  <label  for="nom_rol" class="control-label col-sm-2">Nombre:</label>
				   <div class="col-sm-10">
				    <input type="text" class="form-control"  value="<?php echo trim($resultado[0]['Nom_Rol']);?>" name="nom_rol">
				   </div>
				</div>

				<div class="form-group">
				  <label  for="desc_rol" class="control-label col-sm-2">Descripcion: </label>
				    <div class="col-sm-10">
				     <textarea class="form-control" name="desc_rol"> <?php echo trim($resultado[0]['Des_Rol']); ?></textarea>
				    </div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" class="btn btn-primary " data-toggle="tooltip" title="Actualizar" id="actualizar_rol" value="Actualizar">
						 <button type="button"  class="btn btn-success cancelar" data-toggle="tooltip" title="Cancelar">Cancelar</button>
						<input type="hidden"  name="accion" value="actualiza_rol"/>
			        </div>
			    </div>
			</div>
		   <!-- </div> -->
		</div>
	</form>   
 	

	 <!-- funcion principal de jquery -->
 	<script language="javascript">
	  $(document).ready(Inicio);
	</script>

	 