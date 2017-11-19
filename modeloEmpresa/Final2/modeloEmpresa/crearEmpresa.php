<?php

// Formulario para crear nuevo Departamento descargue ultimo
include '../modeloCiudad/modelo_ciudad.php';
		$ciudad=new Ciudad();
		$resultados= $ciudad->listado_Ciudad();
?>

<form id="fnempresa" role="form" class="form-horizontal">
	<div class="panel-group">
		<div class="panel panel-primary">

		<div class="panel-body">

		<div class="form-group">
		 	<label  for="id_empresa" class="control-label col-sm-2">ID Empresa:</label>
		  <input type="text" class="hide" readonly="true" value="" name="id_empresa">
		 </div>

		<div class="form-group">
		 	<label  for="Nom_empresa" class="control-label col-sm-2">Nombre:</label>
		  <div class="col-sm-10">
	   	<input type="text"  class="form-control" value="" name="Nom_empresa" required placeholder="Nombre Empresa" id="Nom" class="required" minlength="3">
	  	</div>
		</div>

		<div class="form-group">
		 	<label  for="Dir_empresa" class="control-label col-sm-2">Dirección:</label>
			<div class="col-sm-10">
		 	<input type="text"  class="form-control" value="" name="Dir_empresa" required placeholder="Dirección Empresa" id="Dir" class="required" minlength="3">
			</div>
		</div>

		<div class="form-group">
		 	<label  for="Tel_empresa" class="control-label col-sm-2">Telefono:</label>
		  <div class="col-sm-10">
	   	<input type="text"  class="form-control" value="" name="Tel_empresa" required placeholder="Telefono Empresa" id="Tel" class="required" minlength="5">
	  	</div>
		</div>

		<div class="form-group">
		 	<label  for="Email_empresa" class="control-label col-sm-2">Email:</label>
		  <div class="col-sm-10">
	   	<input type="text"  class="form-control" value="" name="Email_empresa" required placeholder="Email Empresa" id="Mail" class="required" minlength="3">
	  	</div>
		</div>

		<div class="form-group">
		  <label  for="id_ciudad" class="control-label col-sm-2">Ciudad:</label>
		   <div class="col-sm-10">
		    <select name="id_ciudad" class="form-control">
			 		<?php foreach ($resultados as $row) {
			 			?>
			 			<option value="<?php echo trim($row['id_ciudad']); ?>">
			 			<?php echo trim($row['nom_ciudad']); ?>
			 			</option>
			 		<?php } ?>
	       </select>
		   </div>
		</div>

		<div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Crear" id="crea_empresa" value="Crear">
        <button type="button" id="cerrar_empresa" class="btn btn-success " data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="crear_empresa"/>
      </div>
    </div>

	  </div>
	</div>
</form>
</div>

<script language="javascript">

	$(document).ready(function(){
		$("#fnempresa").validate({
			rules: {
    			Nom: {
      				required: true,
      				text: true
    			},
					Dir: {
      				required: true,
      				number: true
    			},
					Tel: {
      				required: true,
      				number: true
    			},
				Mail: {
      				required: true,
							email:true,
    			},
  			},
			messages:{
				Nom: {
					required: "Dato obligatorio",
					text: "Sólo datos numéricos"
				},
				Dir: {
					required: "Dato obligatorio",
					number: "Sólo datos numéricos"
				},
				Tel: {
					required: "Dato obligatorio",
					number: "Sólo datos numéricos"
				},
				Mail: {
					required: "Dato obligatorio",
					email: "Formato de correo"
				},
			},
			submitHandler: function(form) {
  				 alert("Todo Bien");
 			}
		});
	});

</script>
<!--  // funcion principal de jquery -->
<script language="javascript">

		$(document).ready(Inicio);
</script>
