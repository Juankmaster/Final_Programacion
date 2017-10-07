<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>submenuAjustesEmpresas</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/estilos1.css">
	<script type="text/javascript" src="js/funcionesJquery.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	 <script language="javascript">/*funcion principal de jquery*/
			$(document).ready(Inicio);
	</script>

</head>
<body>

<!-- main-2 -->
	<div class="principal-2" style="background:#D8DDEF">
		<!-- subMenu de navegacion para la opcion de Ajustes -->

		 <div class="panel-group">
          	<div class="panel panel-primary">
            	<div class="panel-heading"  align="center">
            	</div>
            	  <div class="panel-body">
	            	<div class="row" >																												
	            		<!-- Boton del submenu Usuarios -->
						<div class="col-sm-2" style="padding:0px 0px 0px 0px">
							<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
								<li role="presentacion" id="usuarios"><a href="#" class="btn btn-default btn-lg ">USUARIOS</a></li>
							</ul>			
						</div>
						<!-- Boton del submenu Empresas -->
					<div class="col-sm-2" style="padding:0px 0px 0px 0px ">
						<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
							<li role="precentacion" id="empresas2"><a href="#" class="btn btn-default btn-lg">EMPRESAS</a></li>
						</ul>			
					</div>
					<!-- Boton del submenu Ciudades -->
					<div class="col-sm-2" style="padding:0px 0px 0px 0px">
						<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
							<li role="precentacion" id="ciudades"><a href="#" class="btn btn-default btn-lg">CIUDADES</a></li>
						</ul>			
					</div>
					<!-- Boton del submenu Paises -->
					<div class="col-sm-2" style="padding:0px 0px 0px 0px">
						<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
							<li role="presentacion" id="paises"><a href="#" class="btn btn-default btn-lg">PAISES</a></li>
						</ul>			
					</div><!-- Boton del submenu Roles -->
					<div class="col-sm-2" style="padding:0px 0px 0px 0px">
						<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
							<li role="presentacion" id="roles"><a href="#" id="rol" class="btn btn-default btn-lg ">ROLES</a></li>
						</ul>			
					</div>

	
	<div class="panel panel-default">

		<!-- Estructura contenedora del panel del submenu Paises -->
				 
		 <div class="panel-body">

			<div class="row">

<!-- estructura del formulario para crear submenu de Paises (campos de texto botones etc)  -->
				<div class="col-sm-4">
		  			<!-- lista de Paises creadas -->
		 		</div>
<!-- Diseño del formulario para crear nuevos Paises -->
		  		<div class="col-sm-8">
			  		<form class="form_paises" role="form" method="post" action="control/controladorLogin.php">
						<div class="panel-group">
							<div class="panel panel-primary" style="width:600px;">
							<div class="panel-heading">
								<h4>NUEVO PAIS</h4>
							</div>
								<div class="panel-body">

								<label  for="id_pais">&nbsp; &nbsp;Id_Pais:</label>
								<input type="text" size="4px" name="id_pais"><br><br>
								<label  for="nombre_pais">Nombre:</label>
								<input type="text"  name="nombre_pais"><br><br>
								<input type="submit" class="btn-btn-default" name="pais" value="Guardar">
								<input type="hidden"  name="accion" value="crear_pais"/>
							</div>
										
								</div>
						    </div>
						</div>		
					</form>   
				</div>
		  	</div>
										
	  	</div>
	  </div>
	</div>
</div>
</div>
		
										
										
	
</body>
</html>