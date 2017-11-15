<?php 

include '../modeloEncuentros/modelo_encuentros.php';
		 $id_encuentro=$_POST['id_encuentro'];
         $encuentro=new Encuentro();
         $listado=$encuentro->consultar($id_encuentro);

include '../modeloSeleccion/modelo_seleccion.php';
         $seleccion=new Seleccion();
         $resultado=$seleccion->listado();

 ?>

<form id="fencuentro" role="form" class="form-horizontal">
	<div class="panel-group">	
		<div class="panel panel-primary" >
		  <div class="panel-heading" style="background:#0971B3">
		   <span style="color:#000;">EDITANDO ENCUENTRO</span>
		  </div>
		<div class="panel-body">
		
		<div class="form-group">
		<label  for="id_encuentro" class="control-label col-sm-2">Id:</label>
		  <div class="col-sm-10">
		   <input type="text" readonly="true" class="form-control "name="id_encuentro"
		   value="<?php echo trim($listado[0]['id_encuentro']); ?>">
		 </div>
		</div>

        <div class="form-group">
		<label  for="id_seleccion" class="control-label col-sm-2 ">Seleccion:</label>
		  <div class="col-sm-10">
		  <select class="form-control" name="id_seleccion">
		  	<?php foreach ($resultado as $row) {
		  		if (trim($listado[0]['id_seleccion'])==$row['id_seleccion']) {
		  		?>
		  	<option selected value="<?php echo trim($row['id_seleccion']) ?>">
					<?php echo trim($row['Nom_seleccion'])?>
		  	</option>
		  	<?php}else{ ?>
		  	<option value ="<?php echo trim($row['id_seleccion']) ?>">
					<?php echo trim($row['Nom_seleccion'])?>
		  	</option>
		  	<?php }} ?>		
		  </select>
		 </div>
		</div>
		  		
		  	 
		<div class="form-group">
		 <label  for="fecha_encuentro" class="control-label col-sm-2">Fecha:</label>
		  <div class="col-sm-10">
	   <input type="date" class="form-control required" name="fecha_encuentro"
	           value="<?php echo trim($listado[0]['fecha_encuentro']); ?>">
	     </div>
		</div>

		<div class="form-group">
		 <label  for="hora_encuentro" class="control-label col-sm-2">Hora:</label>
		  <div class="col-sm-10">
	   <input type="time" class="form-control required" minlength="4" name="hora_encuentro"
	            value="<?php echo trim($listado[0]['hora_encuentro']); ?>">
	     </div>
		</div>

		<div class="form-group">
		 <label  for="estadio" class="control-label col-sm-2">Sitio:</label>
		  <div class="col-sm-10">
	   <input type="text" class="form-control required" minlength="3" name="estadio"
	            value="<?php echo trim($listado[0]['estadio']); ?>">
	     </div>
		</div>

		<div class="form-group">
		 <label  for="rival" class="control-label col-sm-2">Rival:</label>
		  <div class="col-sm-10">
	   <input type="text" class="form-control required" minlength="4" name="rival"
	            value="<?php echo trim($listado[0]['rival']); ?>">
	     </div>
		</div>
	          
		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit"class="btn btn-primary" data-toggle="tooltip" title="Editar"       value="Editar">
            <button type="button" id="cerrar_encuentro" class="btn btn-success" data-toggle="        tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden" name="accion" value="actualizar_encuentro"/>
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

<!-- // Funcion para validar los dataos del formulario editarPais --> 

    <script language="javascript">

	  $(document).ready(function(){
		$("#fencuentro").validate({
			submitHandler: function(form) {
  		    var datos=$("#fencuentro").serialize();
  		   
			    $.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:datos,
				dataType:"html",
				success:function  (result) {
					$("#subpanel1").load("vistaSelecciones/submenuSeleccionesEncuentros.php");
				}
			})
	 			}
			});
		});
				
    </script>	   