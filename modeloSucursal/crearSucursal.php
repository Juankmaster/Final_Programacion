<?php 

include '../modeloEmpresa/modelo_empresa.php';
	   $empresa=new Empresa();
	   $resultados= $empresa->listado();
?>

<form id="fnsucursal" role="form" class="form-horizontal">
	<div class="panel-group">
		<div class="panel panel-primary">
			<div class="panel-heading" style="background:#0971B3">
	        <span style="color:#000;">CREANDO SUCURSAL</span>
	      </div>
		<div class="panel-body">
		
	   <div class="form-group">
		 <label  for="id_sucursal" class="control-label col-sm-2 hide">Id:</label>
		  <div class="col-sm-10">
		    <input type="text"  class="form-control hide" readonly="true" name="id_sucursal" >
		  </div>
       </div>
		

		<div class="form-group">
		 <label  for="nom_sucursal" class="control-label col-sm-2">Nombre:</label>
		  <div class="col-sm-10">
	        <input type="text"  class="form-control required" minlength="4" name="nom_sucursal">
	      </div>
		</div>

		<div class="form-group">
		  <label  for="id_empresa" class="control-label col-sm-2">Empresa:</label>
		   <div class="col-sm-10">
		    <select name="id_empresa" class="form-control required">
		    	<option value=""></option>
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
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Crear" id="crea_sucursal" value="Crear">
            <button type="button" id="cerrar_sucursal" class="btn btn-success" data-toggle="tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden"  name="accion" value="crear_sucursal"/>
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

<!-- // Funcion para validar los dataos del formulario crearProceso  -->

<script language="javascript">

  $(document).ready(function(){
	$("#fnsucursal").validate({
		submitHandler: function(form) {
		    var datos=$("#fnsucursal").serialize();
		     	
		    $.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:datos,
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("vistaEmpresa/submenuEmpresasSucursales.php");
			}
		})
 			}
		});
	});

			
</script>