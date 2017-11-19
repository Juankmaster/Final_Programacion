<?php 

include '../modeloDepartamento/modelo_departamento.php';
			$id_departamento=$_POST["id_departamento"];
		    $departamento=new Departamento();
	   $resultado= $departamento->consultar_Departamento($id_departamento);	

	   include '../modeloEmpresa/modelo_empresa.php';
		    $empresa=new Empresa();
	   $resultados= $empresa->listado_Empresa();
?>

<form id="fdepartamentos" role="form" class="form-horizontal">
	<div class="panel-group">
		<div class="panel panel-primary" >
		
		<div class="panel-body">
		
		<div class="form-group">
		<label  for="id_usuario" class="hide">Id Departamento</label>
		<input type="text"  readonly="true" value="<?php echo trim($resultado[0]['id_departamento']);?>" name="id_departamento" class="hide">
		</div>

		<div class="form-group">
		 <label  for="nom_departamento" class="control-label col-sm-4">Nombre:</label>
		  <div class="col-sm-8">
	   <input type="text"  class="form-control" value="<?php echo trim($resultado[0]['Nom_departamento']);?>" name="nom_departamento">
	  </div>
		</div>


		<!-- <div class="form-group">
		 <label  for="clave_usuario" class="control-label col-sm-2">Id Empresa:</label>
		  <div class="col-sm-10">
		   <input type="text" class="form-control" value="<?php echo trim($resultado[0]['id_empresa']);?>" name="id_empresa">
		  </div>
		</div> -->

		<div class="form-group">
		  <label  for="id_empresa" class="control-label col-sm-4">Empresa:</label>
		   <div class="col-sm-8">
		    <select name="id_empresa" class="form-control">

			 <?php foreach ($resultados as $row) {
			 	if(trim($resultado[0]['id_empresa'])==$row['id_empresa']) {?>
				<option selected value="<?php echo trim($row['id_empresa']) ?>"> 
					<?php echo trim($row['Nom_empresa']); ?>
				</option>
			 	<?php }else{ ?>			 		
			 <option value="<?php echo trim($row['id_empresa']); ?>">
			 	<?php echo trim($row['Nom_empresa']); ?>
			 </option>
			 <?php } }?> 

	        </select>
		   </div>
		</div>
		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Actualizar" id="actua_depa" value="Actualizar">
            <button type="button" id="cerrar_depa" class="btn btn-success" data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="actualizar_departamento"/>
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