
	
<!-- Codigo para el formulario para crear nuevos roles -->
	     
	<form id="f_a_roles" role="form" method="post"  class="form-horizontal">
		<div class="panel-group" >
			<div class="panel panel-primary">
			   <div class="panel-heading" style="background:#0971B3">
			  	  <span style="color:#000;">CREANDO ROL</span>
		       </div>
				<div class="panel-body" >
				
			    <div class="form-group">
			      <label  for="nom_rol" class="control-label col-sm-2">Nombre:</label>
			        <div class="col-sm-10">
			          <input type="text" class="form-control required" name="nom_rol" minlength="4">
			       </div>
			    </div>


			    <div class="form-group">
			      <label  for="desc_rol" class="control-label col-sm-2">Descripcion:</label>
			      <div class="col-sm-10">
			        <textarea class="form-control" name="desc_rol"></textarea>
			     </div>
			    </div>

				<div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
			        <input type="submit" class="btn btn-primary " id="crear_rol" value="Crear">
			        <input type="button" class="btn btn-success cancelar " id="cancelar" value="Cancelar">
			        <input type="hidden"  name="accion" value="crear_rol"/>
			      </div>
			    </div>
			</div>
		</div>
	</form> 

				  
	<!--funcion principal de jquery-->

	<script language="javascript">
	   $(document).ready(Inicio);
    </script>  

		<link rel="stylesheet" type="text/css" href="bootstrap/estiloMenuPrincipal.css">
		<script language="javascript" src="bootstrap/js/jquery.validate.js"></script>

<!-- // Funcion para validar los dataos del formulario crearRoles --> 

    <script language="javascript">

	  $(document).ready(function(){
		$("#f_a_roles").validate({
			submitHandler: function(form) {
  		    var datos=$("#f_a_roles").serialize();
			    $.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:datos,
				dataType:"html",
				success:function  (result) {
					$("#subpanel1").load("php/submenuAjustesRoles.php");
				}
			})

	 			}
			});
		});
				
    </script>	        	
  		    

				      