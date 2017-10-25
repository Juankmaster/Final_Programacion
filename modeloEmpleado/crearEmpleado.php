<?php 


include '../modeloCargo/modelo_cargo.php';
		 $cargo=new Cargo();
	     $resultadoC= $cargo->listado_Cargo();

include '../modeloSucursal/modelo_sucursal.php';
		 $sucursal=new Sucursal();
	     $resultadoS= $sucursal->listado_Sucursal();



?>

<form id="fnempleado" role="form" class="form-horizontal">
	<div class="panel-group">
		<div class="panel panel-primary" >
		
		<div class="panel-body">
		
		<div class="form-group">
		<label  for="id_empleado" class="hide">Id:</label>
		<input type="text"  readonly="true" value="" name="id_empleado" class="hide">
		</div>

		<div class="form-group">
		 <label  for="nom_empleado" class="control-label col-sm-2">Nombre:</label>
		  <div class="col-sm-10">
	       <input type="text"  class="form-control" value="" name="nom_empleado">
	     </div>
		</div>

		<div class="form-group">
		 <label  for="ape_empleado" class="control-label col-sm-2">Apellido:</label>
		  <div class="col-sm-10">
	       <input type="text"  class="form-control" value="" name="ape_empleado">
	     </div>
		</div>

		<div class="form-group">
		 <label  for="cel_empleado" class="control-label col-sm-2">Celular:</label>
		  <div class="col-sm-10">
		   <input type="text" class="form-control" value="" name="cel_empleado">
		  </div>
		</div>

		<div class="form-group">
		 <label  for="email_empleado" class="control-label col-sm-2">Email:</label>
		  <div class="col-sm-10">
		   <input type="email" class="form-control" value="" name="email_empleado">
		  </div>
		</div>


		<div class="form-group">
		 <label  for="dir_empleado" class="control-label col-sm-2">Direccion:</label>
		  <div class="col-sm-10">
		   <input type="text" class="form-control" value="" name="dir_empleado">
		  </div>
		</div>


		<div class="form-group">
		  <label  for="id_cargo" class="control-label col-sm-2">Cargo:</label>
		   <div class="col-sm-10">
		    <select name="id_cargo" class="form-control">

			 <?php foreach ($resultadoC as $row) {
			 	?>		 		
			 <option value="<?php echo trim($row['id_cargo']); ?>">
			 	<?php echo trim($row['Nom_cargo']); ?>
			 </option>

			 <?php } ?> 

	        </select>
		   </div>
		</div>
        


		<div class="form-group">
		  <label  for="id_sucursal" class="control-label col-sm-2">Sucursal:</label>
		   <div class="col-sm-10">
		    <select name="id_ciudad" class="form-control">

			 <?php foreach ($resultadoS as $row) {
			 	?>		 		
			 <option value="<?php echo trim($row['id_sucursal']); ?>">
			 	<?php echo trim($row['Nom_sucursal']); ?>
			 </option>

			 <?php } ?> 

	        </select>
		   </div>
		</div>

		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Crear" id="crea_empleado" value="Crear">
            <button type="button" id="cerrar_empleado" class="btn btn-success" data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="crear_empleado"/>
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