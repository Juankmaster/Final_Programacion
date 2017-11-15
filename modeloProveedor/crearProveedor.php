<?php 

include '../modeloCiudad/modelo_ciudad.php';
		 $ciudad=new Ciudad();
	     $resultadoCI= $ciudad->listado();

?>


<form id="fnproveedor" role="form" class="form-horizontal">
	<div class="panel-group">
		<div class="panel panel-primary" >
		  <div class="panel-heading" style="background:#0971B3">
		      <span style="color:#000;">CREANDO PROVEEDOR</span>
		  </div>
		  <div class="panel-body">
		     



		  <div class="form-group">
		   <label  for="tipo_proveedor"style="text-align:left" class="control-label col-sm-3"> Tipo:</label>
		     <div class="col-sm-9">
	          <select name="tipo_proveedor" id="tipo" onChange="funcionTipo()" class="form-control tipo required">
        		<option value=""></option>
        		<option value="Natural" >Natural</option>
        		<option  value="juridica" >Juridica</option>
	          </select>
	       </div>
	       
		   </div>
		
		  <div class="form-group">
			  <label  for="nom_proveedor"style="text-align:left" class="control-label col-sm-3">Nombre:</label>
			   <div class="col-sm-9">
			   	 <input type="text" class="form-control required" minlength="3" name="nom_proveedor" >
			   </div>
		  </div> 
		
		  <div class="form-group" id="apellido">
			  <label  for="ape_proveedor"style="text-align:left" class="control-label col-sm-3">Apellido:</label>
			   <div class="col-sm-9">
			   	 <input type="text" class="form-control required" minlength="3" id="ape"  name="ape_proveedor" >
			   </div>
		  </div>

		 <!--  <div class="form-group" id="cedula">
		 			  <label  for="num_documento" class="control-label col-sm-3">Cedula:</label>
		 			   <div class="col-sm-8">
		 			   	 <input type="text" class="form-control required number" minlength="8" name="num_documento" >
		 			   </div>
		 </div> -->

		  <div class="form-group">
			  <label  for="email_proveedor"style="text-align:left" class="control-label col-sm-3">Email:</label>
			   <div class="col-sm-9">
			   	 <input type="text" class="form-control required email" name="email_proveedor" >
			   </div>
		  </div>

		  <div class="form-group" id="nit">
			  <label  for="nit"style="text-align:left" class="control-label col-sm-3">Nit/Rut:</label>
			   <div class="col-sm-9">
			   	 <input type="text" class="form-control required number" minlength="8" name="nit">
			   </div>
		  </div>

		  <div class="form-group" id="razon_social">
			  <label  for="razon_social"style="text-align:left" class="control-label col-sm-3">Razon Social:</label>
			   <div class="col-sm-9">
			   	 <input type="text" class="form-control required" minlength="2" id="rs" name="razon_social" >
			   </div>
		  </div>

		  <div class="form-group">
			  <label  for="tel_proveedor"style="text-align:left" class="control-label col-sm-3">Telefono:</label>
			   <div class="col-sm-9">
			   	 <input type="text" class="form-control required" minlength="7" name="tel_proveedor" >
			   </div>
		  </div> 

		  <div class="form-group">
			  <label  for="dir_proveedor" style="text-align:left"class="control-label col-sm-3">Direccion:</label>
			   <div class="col-sm-9">
			   	 <input type="text" class="form-control"  name="dir_proveedor" >
			   </div>
		  </div>

			<div class="form-group">
			  <label  for="id_ciudad" style="text-align:left"class="control-label col-sm-3">Ciudad:</label>
			   <div class="col-sm-9">
			    <select name="id_ciudad" class="form-control required">
			     <option value=""></option>
				 <?php foreach ($resultadoCI as $rows) { ?>	
				 <option value="<?php echo trim($rows['id_ciudad']); ?>">
				 	  <?php echo trim($rows['Nom_ciudad']); ?>
				 </option>
				 <?php } ?> 
		        </select>
			   </div>
			</div>
		
	        	
			<div class="form-group">        
	           <div class="col-sm-offset-2 col-sm-10">
			    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Crear" 
			            id="crea_proveedor" value="Crear">
	            <button type="button" id="cerrar_proveedor" class="btn btn-success" data-toggle="tooltip"        title="Cancelar">Cancelar</button>
			    <input type="hidden" name="accion" value="crear_proveedor">
	           </div>
	        </div>

		  </div>
		</div>
	 
	</div>  
	</form> 

<!--  // funcion principal de jquery -->
	
<script type="text/javascript">

       $(document).ready(Inicio);

        $(document).ready(function() {
  				  var x = document.getElementById("tipo").value;
  				  if(x == "juridica"){
  				  	/*$("#apellido").css("display","none");
  				  	$("#cedula").css("display","none");*/
  				  	$("#apellido").hide("slow");
  				  	 $("#ape").removeClass("required");
  				  }
  			});
</script>


        <link rel="stylesheet" type="text/css" href="bootstrap/estiloMenuPrincipal.css">
		<script language="javascript" src="bootstrap/js/jquery.validate.js"></script>

<!-- // Funcion para validar los dataos del formulario crearRoles --> 

    <script language="javascript">

	  $(document).ready(function(){
		$("#fnproveedor").validate({
			submitHandler: function(form) {
  		    var datos=$("#fnproveedor").serialize();
  		     
			    $.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:datos,
				dataType:"html",
				success:function  (result) {
					$("#subpanel1").load("vistaEmpresa/submenuEmpresaProveedores.php");
				}
			})

	 			}
			});
		});
				
    </script>	        	
				
  		    



  
