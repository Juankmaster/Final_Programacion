<?php 

include '../modeloServicio/modelo_servicio.php';
		$id_servicio=$_POST["id_servicio"];
	    $servicio=new Servicio();
	    $resultado= $servicio->consultar($id_servicio);	

?>

<form id="fservicio" role="form" class="form-horizontal">
	<div class="panel-group">
	  <div class="panel panel-primary" >
	  	<div class="panel-heading" style="background:#0971B3">
		   <span style="color:#000;">EDITANDO SERVICIO</span>
		</div>


		<div class="panel-body">
		<div class="form-group">
		    <label  for="id_servicio" class="control-label col-sm-3">Id Servicio</label>
			<div class="col-sm-9">
		      <input type="text"readonly="true" class="form-control" name="id_servicio"
		              value="<?php echo trim($resultado[0]['id_servicio'])?>" >
		    </div>
		 </div>
		
		<div class="form-group">
		   <label  for="nom_servicio" class="control-label col-sm-3">Nombre:</label>
		   <div class="col-sm-9">
	       <input type="text"class="form-control required" minlength="4" name="nom_servicio"
	              value="<?php echo trim($resultado[0]['Nom_servicio']);?>" >
	      </div>
		</div>
		
		

		<div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
		    <input type="submit" class="btn btn-primary" data-toggle="tooltip" title="Actualizar" id="actua_servicio" value="Actualizar">
            <button type="button" id="cerrar_servicio" class="btn btn-success" data-toggle="        tooltip" title="Cancelar">Cancelar</button>
		    <input type="hidden" name="accion" value="actualizar_servicio"/>
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

<!-- // Funcion para validar los dataos del formulario editarPais --> 

    <script language="javascript">

	  $(document).ready(function(){
		$("#fservicio").validate({
			submitHandler: function(form) {
				
  		    var datos=$("#fservicio").serialize();
			    $.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:datos,
				dataType:"html",
				success:function  (result) {
					$("#subpanel1").load("vistaEmpresa/submenuEmpresaServicios.php");
				}
			})

	 			}
			});
		});
  		      
				
    </script>	        