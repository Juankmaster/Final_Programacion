

<form id="fnpais" role="form" class="form-horizontal">
	<div class="panel-group">
	  <div class="panel panel-primary" >
		<div class="panel-body">
		<div class="form-group">
		  <label  for="id_pais" class="control-label col-sm-2">ID:</label>
		  <div class=" col-sm-10">
		  <input type="text" class="form-control" readonly="true"value=""name="id_pais" >
		  </div>
		</div>
		
		<div class="form-group">
		   <label  for="nom_pais" class="control-label col-sm-2">Nombre:</label>
		   <div class="col-sm-10">
	        <input type="text"class="form-control"value="" name="nom_pais">
	       </div>
		</div>

		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Crear" id="crea_pais" value="Crear">
            <button type="button" id="cerrar_pais" class="btn btn-success" data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="crear_pais"/>
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




					