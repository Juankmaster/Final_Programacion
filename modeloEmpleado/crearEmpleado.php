<?php 


include '../modeloCargo/modelo_cargo.php';
		 $cargo=new Cargo();
	     $resultadoC= $cargo->listado();

include '../modeloSucursal/modelo_sucursal.php';
		 $sucursal=new Sucursal();
	     $resultadoS= $sucursal->listado();

?>


<form id="fnempleado" role="form" class="form-horizontal">
	<div class="panel-group">
		<div class="panel panel-primary">
		  <div class="panel-heading" style="background:#0971B3">
	        <span style="color:#000;">CREANDO EMPLEADO</span>
	      </div>
		<div class="panel-body">
		  <div class="form-group">
		    <label  for="id_empleado" class="control-label col-sm-2 hide">Id:</label>
		    <input type="text"  readonly="true" name="id_empleado" class="hide">
		  </div>
		

		<div class="form-group">
		 <label  for="nom_empleado" class="control-label col-sm-2">Nombre:</label>
		  <div class="col-sm-10">
	       <input type="text" class="form-control required" minlength="4" name="nom_empleado">
	     </div>
		</div>
		

		<div class="form-group">
		 <label  for="ape_empleado" class="control-label col-sm-2">Apellido:</label>
		  <div class="col-sm-10">
	       <input type="text"  class="form-control required" minlength="3" name="ape_empleado">
	     </div>
		</div>

		<div class="form-group">
		 <label  for="cel_empleado" class="control-label col-sm-2">Celular:</label>
		  <div class="col-sm-10">
		   <input type="text" class="form-control required" minlength="7" name="cel_empleado">
		  </div>
		</div>

		<div class="form-group">
		 <label  for="email_empleado" class="control-label col-sm-2">Email:</label>
		  <div class="col-sm-10">
		   <input type="text" class="form-control required email" name="email_empleado">
		  </div>
		</div>


		<div class="form-group">
		 <label  for="dir_empleado" class="control-label col-sm-2">Direccion:</label>
		  <div class="col-sm-10">
		   <input type="text" class="form-control required" value="" name="dir_empleado">
		  </div>
		</div>


		<div class="form-group">
		  <label  for="id_cargo" class="control-label col-sm-2">Cargo:</label>
		   <div class="col-sm-10">
		    <select name="id_cargo" class="form-control required">
		    	<option value=""></option>
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
		    <select name="id_sucursal" class="form-control required">
		    	<option value=""></option>
			 <?php foreach ($resultadoS as $row) {?>	
			 <option value="<?php echo trim($row['id_sucursal']); ?>">
			 	<?php echo trim($row['Nom_sucursal']); ?>
			 </option>
			 <?php } ?> 
	        </select>
		   </div>
		</div>
			 		 		
		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Crear" value="Crear">
            <button type="button" id="cerrar_empleado" class="btn btn-success" data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="crear_empleado"/>
           </div>
        </div>
	  </div>
	</div>
</div>  
</form> 

<!--  // funcion principal de jquery -->
<script language="javascript">
 
		$(document).ready(Inicio);
</script> 

  <link rel="stylesheet" type="text/css" href="bootstrap/estiloMenuPrincipal.css">
		<script language="javascript" src="bootstrap/js/jquery.validate.js"></script>

<!-- // Funcion para validar los dataos del formulario crearProceso  -->

<script language="javascript">

  $(document).ready(function(){
	$("#fnempleado").validate({
		submitHandler: function(form) {
		    var datos=$("#fnempleado").serialize();
		     	
		    $.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:datos,
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("vistaEmpresa/submenuEmpresaEmpleados.php");
			}
		})

 			}
		});
	});
			
</script>




        




					