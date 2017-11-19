<?php
// Formulario para crear nuevo Departamento
include '../modeloEmpresa/modelo_empresa.php';
			$empresa=new Empresa();
		  $resultados= $empresa->listado_Empresa();
?>

<form id="fnprocesos" role="form" class="form-horizontal">
	<div class="panel-group">
		<div class="panel panel-primary" >

		<div class="panel-body">

		<div class="form-group">
		 <label  for="id_departamento" class="control-label col-sm-2">ID:</label>
		  <div class="col-sm-10">
		  <input type="text" class="control-label col-sm-2" readonly="true"  name="id_proc">
		  </div>
		</div>

		<div class="form-group">
		 <label  for="nom_proc" class="control-label col-sm-2">Nombre:</label>
		  <div class="col-sm-10">
	   <input type="text"  class="form-control" value="" name="nom_proc" required placeholder="Nombre Proceso">
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
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Crear" id="crea_proceso" value="Crear">
            <button type="button" id="cerrar_proceso" class="btn btn-success " data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="crear_proceso"/>
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
