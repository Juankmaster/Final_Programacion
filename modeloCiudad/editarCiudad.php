<?php 

include '../modeloCiudad/modelo_ciudad.php';
			$id_ciudad=$_POST["id_ciudad"];
		    $ciudad=new Ciudad();
	   $resultado= $ciudad->consultar_Ciudad($id_ciudad);	

	   include '../modeloPais/modelo_pais.php';
		    $pais=new Pais();
	   $resultados= $pais->listado_Pais();
?>

<form id="fciudad" role="form" class="form-horizontal">
	<div class="panel-group">
	  <div class="panel panel-primary" >
		<div class="panel-body">
		<div class="form-group">
		  <label  for="id_ciudad" class="hide">Id Ciudad</label>
		  <input type="text"readonly="true"value="<?php echo trim($resultado[0]['id_ciudad']);?>"name="id_ciudad" class="hide">
		</div>
		
		<div class="form-group">
		   <label  for="nom_ciudad" class="control-label col-sm-2">Nombre:</label>
		   <div class="col-sm-10">
	       <input type="text"class="form-control"value="<?php echo trim($resultado[0]['Nom_ciudad']);?>" name="nom_ciudad">
	      </div>
		</div>
		
		<div class="form-group">
		  <label  for="id_pais" class="control-label col-sm-2">Pais:</label>
		   <div class="col-sm-10">
		    <select name="id_pais" class="form-control">
			 <?php foreach ($resultados as $row) {
			 	if(trim($resultado[0]['id_pais'])==$row['id_pais']) {?>
				<option selected value="<?php echo trim($row['id_pais']) ?>"> 
					<?php echo trim($row['Nom_pais']); ?>
				</option>
			 	<?php }else{ ?>			 		
			 <option value="<?php echo trim($row['id_pais']); ?>">
			 	<?php echo trim($row['Nom_pais']); ?>
			 </option>
			 <?php } }?> 
	        </select>
		   </div>
		</div>

		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Actualizar" id="actua_ciudad" value="Actualizar">
            <button type="button" id="cerrar_ciudad" class="btn btn-success" data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="actualizar_ciudad"/>
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