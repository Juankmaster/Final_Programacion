<?php 

// Formulario para crear nuevo Departamento

include '../modeloEmpresa/modelo_empresa.php';
			$empresa=new Empresa();
		    $resultados= $empresa->listado();
?>

<form id="fndepartamento" role="form" class="form-horizontal">
	<div class="panel-group">
		<div class="panel panel-primary" >
		  <div class="panel-heading" style="background:#0971B3">
				<span style="color:#000;">CREANDO DEPARTAMENTO</span>
		  </div>
		<div class="panel-body">
		
		<div class="form-group">
		 <label  for="id_departamento" class="control-label col-sm-2 hide">ID:</label>
		  <div class="col-sm-10">
		  <input type="text" class="form-control hide" name="id_departamento">
		  </div>
		</div>

		<div class="form-group">
		 <label  for="nom_departamento" class="control-label col-sm-2">Nombre:</label>
		  <div class="col-sm-10">
	   <input type="text"  class="form-control required " minlength="3" name="nom_departamento" >
	  </div>
		</div>

		<div class="form-group">
		  <label  for="id_empresa" class="control-label col-sm-2">Empresa:</label>
		   <div class="col-sm-10">
		    <select name="id_empresa" class="form-control">

			<?php foreach ($resultados as $row) {?>
			<option value="<?php echo trim($row['id_empresa']); ?>">
				<?php echo trim($row['Nom_empresa']); ?>
			</option>
			<?php } ?>

	        </select>
		   </div>
		</div>
		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Crear" id="crea_depar" value="Crear">
            <button type="button" id="cerrar_depa" class="btn btn-success " data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="crear_departamento">
           </div>
        </div>
	  </div>
	</div>
</form> 
</div>  

<script language="javascript">
 
		$(document).ready(Inicio);
</script>
					
<link rel="stylesheet" type="text/css" href="bootstrap/estiloMenuPrincipal.css">
<script language="javascript" src="bootstrap/js/jquery.validate.js"></script>

<!-- // Funcion para validar los dataos del formulario crearDepartamento --> 

<script language="javascript">
	$(document).ready(function(){
		$("#fndepartamento").validate({
			submitHandler: function(form) {

  		    var datos=$("#fndepartamento").serialize();
			    $.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:datos,
				dataType:"html",
				success:function  (result) {
					$("#subpanel1").load("php/submenuAjustesDepartamentos.php");
				}
		})
 			}
		});
	});

</script>
