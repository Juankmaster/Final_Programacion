<?php 


  include'../modeloEmpleado/modelo_empleado.php';
		 $empleado=new Empleado();
	     $resultadoE= $empleado->listado();

?>

<form id="fnproceso" role="form" class="form-horizontal">
	<div class="panel-group">
		<div class="panel panel-primary" >
			<div class="panel-heading" style="background:#0971B3">
		      <span style="color:#000;">CREANDO PROCESO</span>
		    </div>
		<div class="panel-body">

		<div class="form-group">
		  <label  for="id_proceso"class="control-label col-sm-2 hide" >Id:</label>
		  <div class="col-sm-10">
		   <input type="text" class="form-control hide" readonly="true" name="id_proceso">
		           
		   </div>
		 </div> 


		<div class="form-group">
		 <label  for="nom_proceso" class="control-label col-sm-2">Nombre:</label>
		  <div class="col-sm-10">
	       <input type="text" class="form-control required" minlength="4" name="nom_proceso">
	     </div>
		</div>

        <div class="form-group">
         	<label for="id_empleado" class="control-label col-sm-2">Encargado:</label>
         	<div class="col-sm-10">
     			<select  class="form-control required" name="id_empleado">
     				<option value=""></option>
         		<?php foreach($resultadoE as $row) {?>
     				<option value="<?php echo trim($row['id_empleado']); ?>">
     				<?php echo trim($row['Nom_empleado']);?>
     				</option>
     			<?php } ?>
     			</select>
         	</div>
        </div>
         				
		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Crear"       value="Crear">
            <button type="button" id="cerrar_proceso" class="btn btn-success" 
                    data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden" name="accion" value="crear_proceso">
           </div>
	    </div>
	   </div>
	 </div>
  </div>
</form> 
		            
			
<!-- // funcion principal de jquery -->

	<script language="javascript">
	
		$(document).ready(Inicio);
	</script>
         		
   <link rel="stylesheet" type="text/css" href="bootstrap/estiloMenuPrincipal.css">
		<script language="javascript" src="bootstrap/js/jquery.validate.js"></script>

<!-- // Funcion para validar los dataos del formulario crearProceso  -->

    <script language="javascript">

	  $(document).ready(function(){
		$("#fnproceso").validate({
			submitHandler: function(form) {
  		    var datos=$("#fnproceso").serialize();
  		     	
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
       	

		

		










		
		
