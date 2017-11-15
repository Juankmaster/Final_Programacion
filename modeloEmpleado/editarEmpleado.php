<?php 


include '../modeloEmpleado/modelo_empleado.php';
		 $id_empleado=$_POST['id_empleado'];
		 $empleado=new Empleado();
	     $resultadoE= $empleado->consultar($id_empleado);

include '../modeloCargo/modelo_cargo.php';
		 $cargo=new Cargo();
	     $resultadoC= $cargo->listado();

include '../modeloSucursal/modelo_sucursal.php';
		 $sucursal=new Sucursal();
	     $resultadoS= $sucursal->listado();

?>


<form id="fempleado" role="form" class="form-horizontal">
	<div class="panel-group">
		<div class="panel panel-primary" >
			<div class="panel-heading" style="background:#0971B3">
		      <span style="color:#000;">EDITANDO EMPLEADO</span>
		    </div>
		<div class="panel-body">
		<div class="form-group">
		  <label  for="id_empleado"class="control-label col-sm-2 " >Id:</label>
		  <div class="col-sm-10">
		   <input type="text" class="form-control "readonly="true" value="<?php echo trim($resultadoE[0]['id_empleado']); ?>" name="id_empleado" >
		   </div>
		 </div>     
		

		<div class="form-group">
		 <label  for="nom_empleado" class="control-label col-sm-2">Nombre:</label>
		  <div class="col-sm-10">
	       <input type="text" class="form-control required" minlength="4"
	              value="<?php echo trim($resultadoE[0]['Nom_empleado']); ?>" name="nom_empleado">
	     </div>
		</div>

		<div class="form-group">
		 <label  for="ape_empleado" class="control-label col-sm-2">Apellido:</label>
		  <div class="col-sm-10">
	       <input type="text" class="form-control required" minlength="3" name="ape_empleado"
	              value="<?php echo trim($resultadoE[0]['Ape_empleado']); ?>" >
	     </div>
		</div>

		<div class="form-group">
		 <label  for="cel_empleado" class="control-label col-sm-2">Celular:</label>
		  <div class="col-sm-10">
		   <input type="text" class="form-control required" minlength="7" name="cel_empleado"
		          value="<?php echo trim($resultadoE[0]['Cel_empleado']);?>">
		  </div>
		</div>
		         

		<div class="form-group">
		 <label  for="email_empleado" class="control-label col-sm-2">Email:</label>
		  <div class="col-sm-10">
		   <input type="text" class="form-control required email" value="<?php echo trim($resultadoE[0]['Email_empleado'])    ; ?>"name="email_empleado">
		  </div>
		</div>


		<div class="form-group">
		 <label  for="dir_empleado" class="control-label col-sm-2">Direccion:</label>
		  <div class="col-sm-10">
		   <input type="text"class="form-control required" value="<?php echo trim($resultadoE[0]['Dir_empleado']);?>" name="dir_empleado">
		  </div>
		</div>


		<div class="form-group">
		  <label  for="id_cargo" class="control-label col-sm-2">Cargo:</label>
		   <div class="col-sm-10">
		    <select name="id_cargo" class="form-control">

			 <?php foreach ($resultadoC as $row) {
			 	if(trim($resultadoE[0]['id_cargo'])==$row['id_cargo']){
			 ?>		 		
			 <option selected value="<?php echo trim($row['id_cargo']); ?>">
			 	<?php echo trim($row['Nom_cargo']); ?>
			 </option>
			 <?php }else{ ?>

			  <option value="<?php echo trim($row['id_cargo']); ?>">
			 	<?php echo trim($row['Nom_cargo']); ?>
			 </option>

			 <?php }}?> 
	        </select>
		   </div>
		</div>


		<div class="form-group">
		  <label  for="id_sucursal" class="control-label col-sm-2">Sucursal:</label>
		   <div class="col-sm-10">
		    <select name="id_sucursal" class="form-control">

			 <?php foreach ($resultadoS as $rows) {
			 	if(trim($resultadoE[0]['id_sucursal'])==$rows['id_sucursal']){
			 ?>		 		
			 <option selected value="<?php echo trim($rows['id_sucursal']); ?>">
			 	     <?php echo trim($rows['Nom_sucursal']); ?>
			 </option>
			 <?php }else{ ?>	
			 <option value="<?php echo trim($rows['id_sucursal']); ?>">
			 	     <?php echo trim($rows['Nom_sucursal']); ?>
			 </option>

			 <?php }} ?> 
	        </select>
		   </div>
		</div>
        

		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Actualizar" 
		            id="actualizar_empleado" value="Actualizar">
            <button type="button" id="cerrar_empleado" class="btn btn-success" data-toggle="tooltip"        title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="actualizar_empleado"/>
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

<!-- // Funcion para validar los dataos del formulario crearProceso  -->

<script language="javascript">

  $(document).ready(function(){
	$("#fempleado").validate({
		submitHandler: function(form) {
		    var datos=$("#fempleado").serialize();
		     	
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




					