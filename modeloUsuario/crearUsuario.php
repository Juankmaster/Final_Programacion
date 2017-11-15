
<!-- Codigo para crear Usuarios en el submenu usuarios del menu Ajustes -->
<?php

include '../modelo/modelo_rol.php';
 		    $rol=new Roles();
		   $resultados= $rol->listado_roles();

 ?>

 <form id="fnusuarios" role="form" class="form-horizontal">
		<div class="panel-group">
			<div class="panel panel-primary" >
				<div class="panel-heading" style="background:#0971B3">
		          <span style="color:#000;">CREANDO USUARIO</span>
		        </div>
			<div class="panel-body">
			
			<!-- <div class="form-group">
			<label  for="id_usuario" class="hide"> Id Usuario </label>
			<input type="text" size="18px" readonly="true" name="id_usuario" class="hide">
			</div> -->

			<div class="form-group">
			 <label  for="nom_usuario" class="control-label col-sm-2">Nombre:</label>
			  <div class="col-sm-10">
			   <input type="text"  class="form-control required" minlength="4" name="nom_usuario">
			  </div>
			</div>

			<div class="form-group">
			 <label  for="email_usuario" class="control-label col-sm-2">Email:</label>
			  <div class="col-sm-10">
			   <input type="text" class="form-control required email" name="email_usuario">
			  </div>
			</div>

			<div class="form-group">
			 <label  for="clave_usuario" class="control-label col-sm-2">Clave:</label>
			  <div class="col-sm-10">
			   <input type="password" class="form-control required" name="clave_usuario">
			  </div>
			</div>

			<div class="form-group">
			  <label  for="rol_usuario" class="control-label col-sm-2">Rol:</label>
			   <div class="col-sm-10">
			    <select name="rol_usuario" class="form-control">

				<?php foreach ($resultados as $row) {?>
				<option value="<?php echo trim($row['id_rol']); ?>">
					<?php echo trim($row['Nom_Rol']); ?>
				</option>
				<?php } ?> 
				
		        </select>
			</div>
			</div>
			 <div class="form-group">        
               <div class="col-sm-offset-2 col-sm-10">
			<input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Crear" id="crear_usuario" value="Crear">
              <button type="button" id="cerrar" class="btn btn-success cerrar" data-toggle="tooltip" title="Cancelar">Cancelar</button>
			<input type="hidden"  name="accion" value="crear_usuario"/>
              
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

<!-- // Funcion para validar los dataos del formulario crearPais --> 

    <script language="javascript">

	  $(document).ready(function(){
		$("#fnusuarios").validate({
			submitHandler: function(form) {
  		        var datos=$("#fnusuarios").serialize();
  		        
			    $.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:datos,
				dataType:"html",
				success:function  (result) {
					$("#subpanel1").load("php/submenuAjustesUsuarios.php");
				}
			})

	 			}
			});
		});
				
    </script>	        	