<?php 


include '../modeloProveedor/modelo_proveedor.php';
		 $id_proveedor=$_POST['id_proveedor'];
		 $proveedor=new Proveedor();
	     $resultadoP= $proveedor->consultar($id_proveedor);

include '../modeloCiudad/modelo_ciudad.php';
		 $ciudad=new Ciudad();
	     $resultadoCI= $ciudad->listado();

?>


<form id="fproveedor" role="form" class="form-horizontal">
	<div class="panel-group">
	  <div class="panel panel-primary" >
		 <div class="panel-heading" style="background:#0971B3">
		      <span style="color:#000;">EDITANDO PROVEEDOR</span>
		 </div>
	  <div class="panel-body">

	
	  <div class="form-group">
	    <label  for="id_proveedor"style="text-align:left" class="control-label  col-sm-3" >Id:</label>
	     <div class="col-sm-9">
	      <input type="text" class="form-control" readonly="true" 
	             value="<?php echo trim($resultadoP[0]['id_proveedor']);?>" name="id_proveedor" >
	    </div>
	  </div> 



	  <div class="form-group">
		   <label for="tipo_proveedor"style="text-align:left"class="control-label col-sm-3">Tipo:</label>
		   <div class="col-sm-9">
	        <input type="text" id="tipo" name="tipo_proveedor" class="form-control" readonly="true" 
	               value="<?php echo trim($resultadoP[0]['Tipo_proveedor']); ?>" >
	       </div>
		</div>
	        

		<div class="form-group">
		 <label  for="nom_proveedor" style="text-align:left"class="control-label col-sm-3">Nombre:</label>
		  <div class="col-sm-9">
	       <input type="text" class="form-control required" minlength="3"
	              value="<?php echo trim($resultadoP[0]['Nom_proveedor']); ?>"name="nom_proveedor">
	      </div>
		</div>
	        	
	        	
		<div class="form-group" id="apellido">
		 <label  for="ape_proveedor" style="text-align:left"class="control-label col-sm-3">Apellido:</label>
		  <div class="col-sm-9">
	       <input type="text" id="ape" class="form-control required" name="ape_proveedor" minlength="3"
	              value="<?php echo trim($resultadoP[0]['Ape_proveedor']); ?>">
	      </div>
		</div>


		<!-- <div class="form-group" id="cedula">
		 <label  for="num_documento" class="control-label col-sm-3">Cedula:</label>
		  <div class="col-sm-9">
			       <input type="text" class="form-control" 
			              value="" name="num_documento">
			      </div>
		</div> -->


		<div class="form-group">
		 <label  for="email"style="text-align:left" class="control-label col-sm-3">Email:</label>
		  <div class="col-sm-9">
	       <input type="email" class="form-control" 
	              value="<?php echo trim($resultadoP[0]['Email_proveedor']); ?>" name="email">
	      </div>
		</div>


		<div class="form-group" id="nit">
		 <label  for="nit" style="text-align:left"class="control-label col-sm-3">Nit/Rut:</label>
		  <div class="col-sm-9">
	       <input type="text" class="form-control required number" minlength="8"
	              value="<?php echo trim($resultadoP[0]['Nit']); ?>" name="nit">
	      </div>
		</div>


		<div class="form-group" id="razon_social">
		 <label  for="razon_social" style="text-align:left"class="control-label col-sm-3">Razon Social:</label>
		  <div class="col-sm-9">
	       <input type="text" id="rs" class="form-control required" id="rs" minlength="2"
	              value="<?php echo trim($resultadoP[0]['Razon_social']); ?>" name="razon_social">
	      </div>
		</div>


		 <div class="form-group">
			  <label  for="tel_proveedor"style="text-align:left" class="control-label col-sm-3">Telefono:</label>
			   <div class="col-sm-9">
			   	 <input type="text" class="form-control required" minlength="7"
			   	 value="<?php echo trim($resultadoP[0]['Tel_proveedor']); ?>" name="tel_proveedor" >
			   </div>
		  </div> 


		  <div class="form-group">
			  <label  for="dir_proveedor"style="text-align:left" class="control-label col-sm-3">Direccion:</label>
			   <div class="col-sm-9">
			   	 <input type="text" class="form-control "  
			   	  value="<?php echo trim($resultadoP[0]['Dir_proveedor']); ?>" name="dir_proveedor" > 
			   </div>
		  </div>
	               

		<div class="form-group">
		  <label  for="id_ciudad"style="text-align:left" class="control-label col-sm-3">Ciudad:</label>
		   <div class="col-sm-9">
		    <select name="id_ciudad" class="form-control">

			 <?php foreach ($resultadoCI as $rows) {
			 	if(trim($resultadoP[0]['id_ciudad'])==$rows['id_ciudad']){
			 ?>		 		
			 <option selected value="<?php echo trim($rows['id_ciudad']); ?>">
			 	     <?php echo trim($rows['Nom_ciudad']); ?>
			 </option>
			 <?php }
			    else{ ?>	
			 <option value="<?php echo trim($rows['id_ciudad']); ?>">
			 	     <?php echo trim($rows['Nom_ciudad']); ?>
			 </option>

			 <?php }} ?> 
	        </select>
		   </div>
		</div>
		

		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Actualizar" 
		            id="actualizar_proveedor" value="Actualizar">
            <button type="button" id="cerrar_proveedor" class="btn btn-success" data-toggle="tooltip"        title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="actualizar_proveedor">
           </div>
        </div>

	  </div>
	</div>
</form> 
</div>  

<!--  // funcion principal de jquery -->

    <script language="javascript">
 
		$(document).ready(Inicio);
		$(document).ready(funcionTipo);

	</script>

      
    <link rel="stylesheet" type="text/css" href="bootstrap/estiloMenuPrincipal.css">
	<script language="javascript" src="bootstrap/js/jquery.validate.js"></script>
   
  <!-- // Funcion para validar los dataos del formulario editarProveedor  -->
   
    <script language="javascript">
   
   	  $(document).ready(function(){
   		$("#fproveedor").validate({
   			submitHandler: function(form) {
     		    var datos=$("#fproveedor").serialize();

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
   			})
   		});
   				
       </script>
   

   
   				




		



	  


		
		




		
	








	        	
       





					