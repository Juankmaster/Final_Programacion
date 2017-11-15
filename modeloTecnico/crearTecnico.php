

<form id="fntecnico" role="form" class="form-horizontal">
	<div class="panel-group">	
		<div class="panel panel-primary" >
		  <div class="panel-heading" style="background:#0971B3">
		   <span style="color:#000;">CREANDO TECNICO</span>
		  </div>
		<div class="panel-body">
		
		<div class="form-group">
		<label  for="id_tecnico" class="control-label col-sm-2 hide">Id:</label>
		  <div class="col-sm-10">
		   <input type="text" readonly="true" class="form-control hide"name="id_tecnico">
		 </div>
		</div>
		         
		<div class="form-group">
		 <label  for="nom_tecnico" class="control-label col-sm-2">Nombre:</label>
		  <div class="col-sm-10">
	   <input type="text" class="form-control required" minlength="4" name="nom_tecnico">
	     </div>
		</div>

		<div class="form-group">
		 <label  for="ape_tecnico" class="control-label col-sm-2">Apellido:</label>
		  <div class="col-sm-10">
	   <input type="text" class="form-control required" minlength="4" name="ape_tecnico">
	     </div>
		</div>

		<div class="form-group">
		 <label  for="cel_tecnico" class="control-label col-sm-2">Celular:</label>
		  <div class="col-sm-10">
	   <input type="text" class="form-control required" minlength="8" name="cel_tecnico">
	     </div>
		</div>

		<div class="form-group">
		 <label  for="email_tecnico" class="control-label col-sm-2">Email:</label>
		  <div class="col-sm-10">
	   <input type="text" class="form-control required email" minlength="4" name="email_tecnico">
	     </div>
		</div>
	          

		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit"class="btn btn-primary" data-toggle="tooltip" title="Crear"value       ="Crear">
            <button type="button" id="cerrar_tecnico" class="btn btn-success" data-toggle="        tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="crear_tecnico"/>
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

<!-- // Funcion para validar los dataos del formulario editarPais --> 

    <script language="javascript">

	  $(document).ready(function(){
		$("#fntecnico").validate({
			submitHandler: function(form) {
  		    var datos=$("#fntecnico").serialize();
  		   
			    $.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:datos,
				dataType:"html",
				success:function  (result) {
					$("#subpanel1").load("vistaSelecciones/submenuSeleccionesTecnico.php");
				}
			})

	 			}
			});
		});
				
    </script>	         