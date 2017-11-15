<?php 



include '../modeloProceso/modelo_proceso.php';
		 $id_proceso=$_POST['id_proceso'];
		 $proceso=new Proceso();
	     $resultadoP= $proceso->consultar($id_proceso);

include '../modeloEmpleado/modelo_empleado.php';
		 $empleado=new Empleado();
	     $resultadoE= $empleado->listado();
?>

<form id="fproceso" role="form" class="form-horizontal">
	<div class="panel-group">
		<div class="panel panel-primary" >
			<div class="panel-heading" style="background:#0971B3">
		      <span style="color:#000;">EDITANDO PROCESO</span>
		  </div>
		<div class="panel-body">
		
		<div class="form-group">
		  <label  for="id_proceso"class="control-label col-sm-3 " >Id:</label>
		  <div class="col-sm-9">
		   <input type="text" class="form-control" readonly="true" 
		          value="<?php echo trim($resultadoP[0]['id_proceso']); ?>"name="id_proceso" >
		   </div>
		 </div>     

		<div class="form-group">
		 <label  for="nom_proceso" class="control-label col-sm-3">Nombre:</label>
		  <div class="col-sm-9">
	       <input type="text" class="form-control required" name="nom_proceso" minlength="3"
	              value="<?php echo trim($resultadoP[0]['Nom_proceso']); ?>" >
	     </div>
		</div>


		<div class="form-group">
		  <label  for="id_empleado" class="control-label col-sm-3">Encargado:</label>
		   <div class="col-sm-9">
		    <select name="id_empleado" class="form-control">

			 <?php foreach ($resultadoE as $row) {
			 	if(trim($resultadoP[0]['id_empleado'])==$row['id_empleado']){
			 ?>		 		
			 <option selected value="<?php echo trim($row['id_empleado']); ?>">
			 	<?php echo trim($row['Nom_empleado'].' '.$row['Ape_empleado']); ?>
			 </option>
			 <?php }else{ ?>

			  <option value="<?php echo trim($row['id_empleado']); ?>">
			 	<?php echo trim($row['Nom_empleado'].' '.$row['Ape_empleado']); ?>
			 </option>

			 <?php }}?> 
	        </select>
		   </div>
		</div>
        

		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Actualizar" 
		            value="Actualizar">
            <button type="button" id="cerrar_proceso" class="btn btn-success" data-toggle="tooltip" 
                    title="Cancelar">Cancelar</button>
		    <input type="hidden" name="accion" value="actualizar_proceso">
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

<!-- // Funcion para validar los dataos del formulario editarProceso  -->

    <script language="javascript">

	  $(document).ready(function(){
		$("#fproceso").validate({
			submitHandler: function(form) {
  		    var datos=$("#fproceso").serialize();
  		     	
			    $.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:datos,
				dataType:"html",
				success:function  (result) {
					$("#subpanel1").load("vistaEmpresa/submenuEmpresaProcesos.php");
				}
			})

	 			}
			});
		});
				
    </script>
				




					