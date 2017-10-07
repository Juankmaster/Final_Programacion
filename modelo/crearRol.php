
	<!DOCTYPE html>
	<html lang="es">
<head>
	<meta charset="UTF-8">
		  <title>submenuAjustesRoles</title>
		  <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
		 <script type="text/javascript"  src="bootstrap/js/bootstrap.min.js"></script>
		  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		  <link rel="stylesheet" type="text/css" href="bootstrap/estilos1.css">
		  <script type="text/javascript" src="bootstrap/js/funcionesJquery.js"></script>
		  <script language="javascript">
		  /*funcion principal de jquery*/
			$(document).ready(Inicio);
	     </script>
			
</head>
   <body>
<!-- Codigo para el formulario para crear nuevos roles -->
	     
	<form id="f_a_roles" role="form" method="post">
		<div class="panel-group" >
			<div class="panel panel-primary" style="width:600px; ">
			<!-- <div class="panel-heading" style="background:#0971B3">
				Nuevo Rol
			</div> -->
				<div class="panel-body" >
				</div>
				    <div class="form-group">
				      <label  for="nom_rol">Nombre&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</label>
				      <input type="text" size="18px" name="nom_rol">
				    </div>
				    <div class="form-group">
				      <label  for="desc_rol">Descripcion &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</label>
				      <textarea value="" name="desc_rol"></textarea>
				   </div>
				     <input type="submit" class="btn btn-info " id="crear_rol" value="Crear">
				    <input type="button" class="btn btn-info " id="cancelar" value="Cancelar">
				   <!--   <button type="button" class="close" data-dismiss="modal">&times;</button> -->
					
				     <br><br>
				     <input type="hidden"  name="accion" value="crear_rol"/>
			</div>
		</div>
	</form>   
</body>
</html>
					
 	
		  

		
		 


