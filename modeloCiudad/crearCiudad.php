<?php 

   include '../modeloPais/modelo_pais.php';
	        $pais=new Pais();
            $resultados= $pais->listado();
?>

<form id="fnciudad" role="form" class="form-horizontal">
	<div class="panel-group">
	  <div class="panel panel-primary" >
	  	<div class="panel-heading" style="background:#0971B3">
		   <span style="color:#000;">CREANDO CIUDAD</span>
		</div>


		<div class="panel-body">
		<div class="form-group">
		  <label  for="id_ciudad" class="hide">Id Ciudad</label>
		  <input type="text"readonly="true"value=""name="id_ciudad" class="hide">
		</div>
		
		<div class="form-group">
		   <label  for="nom_ciudad" class="control-label col-sm-2">Nombre:</label>
		   <div class="col-sm-10">
	       <input type="text"class="form-control required" minlength="3" name="nom_ciudad">
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
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Crear" id="crea_ciudad" value="Crear">
            <button type="button" id="cerrar_ciudad" class="btn btn-success" data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="crear_ciudad"/>
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
		$("#fnciudad").validate({
			submitHandler: function(form) {
  		        var datos=$("#fnciudad").serialize();
			    $.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:datos,
				dataType:"html",
				success:function  (result) {
					$("#subpanel1").load("php/submenuAjustesCiudades.php");
				}
			})

	 			}
			});
		});
				
    </script>	        	