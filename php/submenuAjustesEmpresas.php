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
	<div class="panel panel-default">

		<!-- En este panel-body  se cargan los submenus de Roles, Empresas,ciudades, paises -->
				 
		 <div class="panel-body">

			<div class="row">

<!-- estructura del formulario para crear submenu de Empresas (campos de texto botones etc)  -->
				<div class="col-sm-4">
		  			<!-- lista de Empresas creadas -->
		 		</div>
<!-- Diseño del formulario para crear nuevas Empresas -->
		  		<div class="col-sm-8">
			  		<form class="form_rol" role="form" method="post" action="control/controladorLogin.php">
						<div class="panel-group">
							<div class="panel panel-primary" style="width:600px;">
							<div class="panel-heading">
								<h4>NUEVA EMPRESA</h4>
							</div>
								<div class="panel-body">

							<label  for="id_empresa">&nbsp; &nbsp;Id_Empresa:</label>
							<input type="text" size="4px" name="id_empresa"><br><br>
							<label  for="nombre_empresa">Nombre:</label>
							<input type="text"  name="nombre_empresa"><br><br>
							<input type="submit" class="btn-btn-default" name="empresa" value="Guardar">
							<input type="hidden"  name="accion" value="crear_empresa"/>
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