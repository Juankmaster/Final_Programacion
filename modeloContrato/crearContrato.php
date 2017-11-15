<?php 

include '../modeloEmpleado/modelo_empleado.php';
		 $empleado=new Empleado();
	     $resultadoEM= $empleado->listado();

include '../modeloEmpresa/modelo_empresa.php';
		 $empresa=new Empresa();
	     $resultadoE= $empresa->listado();

include '../modeloProveedor/modelo_proveedor.php';
		 $proveedor=new Proveedor();
	     $resultadoP= $proveedor->listado();

include '../modeloCiudad/modelo_ciudad.php';
		 $ciudad=new Ciudad();
	     $resultadoCI= $ciudad->listado();

include '../modeloServicio/modelo_servicio.php';
		 $servicio=new Servicio();
	     $resultadoS= $servicio->listado();

?>


<form id="fncontrato" role="form" class="form-horizontal">
	<div class="panel-group">
		<div class="panel panel-primary" >
		   <div class="panel-heading" style="background:#0971B3">
		      <span style="color:#000;">CREANDO CONTRATO</span>
		  </div>
		<div class="panel-body">
		
		<div class="form-group">
		  <label style="text-align:left"  for="Num_contrato"class="control-label col-sm-3 hide" >Id Contrato:</label>
		  <div class="col-sm-9">
		   <input type="text" class="form-control hide" readonly="true" name="num_contrato" >
		   </div>
		 </div> 


		<div class="form-group">
		 <label style="text-align:left"  for="id_servicio" class="control-label col-sm-3">Servicio:</label>
		  <div class="col-sm-9">
	       <select class="form-control required" name="id_servicio">
	       	<option value=""></option>
	       	<?php foreach ($resultadoS as $row) {?>
	       		<option value="<?php echo trim($row['id_servicio'])?>">
	       			<?php echo trim($row['Nom_servicio'])?>
	       		</option>
	       	<?php } ?>	
	       </select>  
	     </div>
		</div>
	       			
	       	 
		<div class="form-group">
		  <label style="text-align:left" for="id_proveedor" class="control-label col-sm-3">Contratista:</label>
		   <div class="col-sm-9">
		    <select name="id_proveedor" class="form-control required">
		      <option value=""></option>
			 <?php foreach ($resultadoP as $row) { ?>
			  <option value="<?php echo trim($row['id_proveedor']); ?>">
			 	<?php echo trim($row['Nom_proveedor']); ?>
			 </option>
			 <?php }?> 
	        </select>
		   </div>
		</div>


		<div class="form-group">
		  <label style="text-align:left" for="id_empresa" class="control-label col-sm-3">Contratante:</label>
		   <div class="col-sm-9">
		    <select name="id_empresa" class="form-control required">
		      <option value=""></option>
			 <?php foreach ($resultadoE as $rows) {?>		
			 <option value="<?php echo trim($rows['id_empresa']); ?>">
			 	 <?php echo trim($rows['Nom_empresa']); ?>
			 </option>
			 <?php } ?> 
	        </select>
		   </div>
		</div>

		
		<div class="form-group">
		  <label style="text-align:left"  for="id_empleado" class="control-label col-sm-3">Responsable:</label>
		   <div class="col-sm-9">
		    <select name="id_empleado" class="form-control required">
		       <option value=""></option>	
			 <?php foreach ($resultadoEM as $row) { ?>	
			  <option value="<?php echo trim($row['id_empleado']); ?>">
			 	<?php echo trim($row['Nom_empleado'].' '.$row['Ape_empleado']); ?>
			 </option>
			 <?php }?> 
	        </select>
		   </div>
		</div>

			 
	   <div class="form-group">
		  <label style="text-align:left" for="duracion_contrato" class="control-label col-sm-3"> Duracion:</label>
		  <div class="col-sm-9">
	       <input type="text"class="form-control required" name="duracion_contrato">
	      </div>
	   </div>
	            

		<div class="form-group">
		   <label style="text-align:left" for="fecha_inicio" class="control-label col-sm-3">Fecha Inicio:</label>
		   <div class="col-sm-9">
	        <input type="date"class="form-control required" name="fecha_inicio">
	       </div>
		</div>
	              

		<div class="form-group">
		   <label style="text-align:left"  for="fecha_fin" class="control-label col-sm-3">Fecha Fin:</label>
		    <div class="col-sm-9">
	        <input type="date"class="form-control required" name="fecha_fin">
	       </div>
		</div>
		         
				 		
		<div class="form-group">
		  <label style="text-align:left"  for="id_ciudad" class="control-label col-sm-3">Domicilio:</label>
		   <div class="col-sm-9">
		    <select name="id_ciudad" class="form-control required">
		      <option value=""></option>
			 <?php foreach ($resultadoCI as $rows) { ?>	
			 <option value="<?php echo trim($rows['id_ciudad']); ?>">
			 	  <?php echo trim($rows['Nom_ciudad']); ?>
			 </option>
			 <?php } ?> 
	        </select>
		   </div>
		</div>

	              
		<div class="form-group">
			<label style="text-align:left" for="costo" class="control-label col-sm-3">Costo Servicio:</label>
			<div class="col-sm-9">
			  <input type="text" name="costo" class="form-control required" minlength="1">
			</div>	
		</div>	
				      
				
		<div class="form-group">
		   <label style="text-align:left" for="forma_pago" class="control-label col-sm-3">Forma Pago:</label>
		   <div class="col-sm-9">
	        <select class="form-control required" name="forma_pago" >
	        	<option> </option>
	        	<option>Semanal</option>
	        	<option>Quincenal</option>
	        	<option>Mensual</option>
	        	<option>Anual</option>
	        </select>
	       </div>
		</div>
	
				 		
		<div class="form-group">
		   <label style="text-align:left" for="clausula" class="control-label col-sm-3">Clausulas:</label>
		   <div class="col-sm-9">
	        <textarea name="clausula" class="form-control required" minlength="10">
	        </textarea>
	       </div>
		</div>
	        	

		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Crear" 
		            id="crea_contrato" value="Crear">
            <button type="button" id="cerrar_contrato" class="btn btn-success" 
                     data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden" name="accion" value="crear_contrato">
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



        <link rel="stylesheet" type="text/css" href="bootstrap/estiloMenuPrincipal.css">
		<script language="javascript" src="bootstrap/js/jquery.validate.js"></script>

<!-- // Funcion para validar los dataos del formulario crearRoles --> 

    <script language="javascript">

	  $(document).ready(function(){
		$("#fncontrato").validate({
			submitHandler: function(form) {
  		    var datos=$("#fncontrato").serialize();
  		     
			    $.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:datos,
				dataType:"html",
				success:function  (result) {
					$("#subpanel1").load("vistaEmpresa/submenuEmpresaContratos.php");
				}
			})

	 			}
			});
		});
				
    </script>	        	

	               
















	









	        	
       





					