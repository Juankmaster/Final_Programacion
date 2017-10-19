<?php 

include '../modeloEmpresa/modelo_empresa.php';
			$id_empresa=$_POST["id_empresa"];
		    $empresa=new Empresa();
	   $resultado= $empresa->consultar_Empresa($id_empresa);	

include '../modeloCiudad/modelo_ciudad.php';
		    $ciudad=new Ciudad();
	   $resultados= $ciudad->listado_Ciudad();
?>

<form id="fempresa" role="form" class="form-horizontal">
	<div class="panel-group">
		<div class="panel panel-primary" >
		
		<div class="panel-body">
		
		<div class="form-group">
		<label  for="id_empresa" class="hide">Id Empresa</label>
		<input type="text"  readonly="true" value="<?php echo trim($resultado[0]['id_empresa']);?>" name="id_empresa" class="hide">
		</div>

		<div class="form-group">
		 <label  for="nom_empresa" class="control-label col-sm-2">Nombre:</label>
		  <div class="col-sm-10">
	   <input type="text"  class="form-control" value="<?php echo trim($resultado[0]['Nom_empresa']);?>" name="nom_empresa">
	  </div>
		</div>


		<div class="form-group">
		 <label  for="dir_empresa" class="control-label col-sm-2">Direccion:</label>
		  <div class="col-sm-10">
		   <input type="text" class="form-control" value="<?php echo trim($resultado[0]['Dir_empresa']);?>" name="dir_empresa">
		  </div>
		</div>

		<div class="form-group">
		 <label  for="Tel_empresa" class="control-label col-sm-2">Telefono:</label>
		  <div class="col-sm-10">
		   <input type="text" class="form-control" value="<?php echo trim($resultado[0]['Tel_empresa']);?>" name="tel_empresa">
		  </div>
		</div>

		<div class="form-group">
		 <label  for="email_empresa" class="control-label col-sm-2">Email:</label>
		  <div class="col-sm-10">
		   <input type="text" class="form-control" value="<?php echo trim($resultado[0]['Email_empresa']);?>" name="email_empresa">
		  </div>
		</div>

		<div class="form-group">
		  <label  for="id_ciudad" class="control-label col-sm-2">Ciudad:</label>
		   <div class="col-sm-10">
		    <select name="id_ciudad" class="form-control">

			 <?php foreach ($resultados as $row) {
			 	if(trim($resultado[0]['id_ciudad'])==$row['id_ciudad']) {?>
				<option selected value="<?php echo trim($row['id_ciudad']) ?>"> 
					<?php echo trim($row['Nom_ciudad']); ?>
				</option>
			 	<?php }else{ ?>			 		
			 <option value="<?php echo trim($row['id_ciudad']); ?>">
			 	<?php echo trim($row['Nom_ciudad']); ?>
			 </option>
			 <?php } }?> 

	        </select>
		   </div>
		</div>

		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Actualizar" id="actua_empresa" value="Actualizar">
            <button type="button" id="cerrar_empresa" class="btn btn-success" data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="actualizar_empresa"/>
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