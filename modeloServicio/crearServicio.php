

<form id="fnservicio" role="form" class="form-horizontal">
	<div class="panel-group">
	  <div class="panel panel-primary" >
	  	<div class="panel-heading" style="background:#0971B3">
		   <span style="color:#000;">CREANDO SERVICIO</span>
		</div>


		<div class="panel-body">
		<div class="form-group">
		  <label  for="id_servicio" class="hide">Id Servicio</label>
		  <input type="text"readonly="true"value=""name="id_servicio" class="hide">
		</div>
		
		<div class="form-group">
		   <label  for="nom_servicio" class="control-label col-sm-2">Nombre:</label>
		   <div class="col-sm-10">
	       <input type="text"class="form-control required" minlength="3" name="nom_servicio">
	      </div>
		</div>
		
		
		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Crear" 
		           id="crea_servicio" value="Crear">
            <button type="button" id="cerrar_servicio" class="btn btn-success" data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="crear_servicio"/>
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

<!-- // Funcion para validar los dataos del formulario crearPais --> 

    <script language="javascript">

	  $(document).ready(function(){
		$("#fnservicio").validate({
			submitHandler: function(form) {
  		        var datos=$("#fnservicio").serialize();
			    $.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:datos,
				dataType:"html",
				success:function  (result) {
					$("#subpanel1").load("vistaEmpresa/submenuEmpresaServicios.php");
				}
			})

	 			}
			});
		});
				
    </script>	        	
