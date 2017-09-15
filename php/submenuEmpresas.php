
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SubmenuEmpresas</title>
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
		<!-- subMenu de navegacion para la opcion de empresas -->

		 <div class="panel-group">
          	<div class="panel panel-primary">
            	<div class="panel-heading"  align="center">
            	</div>
            	  <div class="panel-body">
	            	<div class="row" >
	            		<!-- Boton del submenu departamentos -->
						<div class="col-sm-2" style="padding:0px 0px 0px 0px">
							<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
								<li role="precentacion" id="departamentos"><a href="#" class="btn btn-default btn-lg ">DEPARTAMENTOS</a></li>
							</ul>			
						</div>
						<!-- Boton del submenu Procesos -->
					<div class="col-sm-2" style="padding:0px 0px 0px 0px ">
						<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
							<li role="precentacion" id="procesos"><a href="#" class="btn btn-default btn-lg">PROCESOS</a></li>
						</ul>			
					</div>
					<!-- Boton del submenu Contratos -->
					<div class="col-sm-2" style="padding:0px 0px 0px 0px">
						<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
							<li role="precentacion" id="contratos"><a href="#" class="btn btn-default btn-lg">CONTRATOS</a></li>
						</ul>			
					</div>
					<!-- Boton del submenu Proveedores -->
					<div class="col-sm-2" style="padding:0px 0px 0px 0px">
						<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
							<li role="precentacion" id="proveedores"><a href="#" class="btn btn-default btn-lg">PROVEEDORES</a></li>
						</ul>			
					</div>
					<!-- Boton del submenu Sucursales -->
					<div class="col-sm-2" style="padding:0px 0px 0px 0px">
						<ul class=" nav nav-tabs nav-justified navbar navbar-inverse" >
							<li role="precentacion" id="sucursales"><a href="#" class="btn btn-default btn-lg">SUCURSALES</a></li>
						</ul>			
					</div>
						<!-- Boton del submenu Empleados -->
					<div class="col-sm-2" style="padding:0px 0px 0px 0px">
						<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
							<li role="precentacion" id="empleados"><a href="#" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-user"></span> EMPLEADOS</a></li>
						</ul>			
					</div>

				<!--panel donde se muestra la tabla de empresas  -->

				<div class="panel panel-default">

		<!-- En este panel-body  se cargan los submenus de departamento, processos, contratos etc -->
				 
				  <div class="panel-body" id="subpanel">
				  	<div class="row">

		<!-- Input para filtrar empresas por ciudad  -->

				  		<div class="col-sm-4">
				  			<label for="filtroCiudad">Ciudad: </label>
				  			<input type="text" name="filtroCiudad" id="filtroCiudad">
				  		</div>
				  		<div class="col-sm-8">

		<!-- Tabla donde se muestran las empresas registradas -->
						<div class="table-responsive">
  							<table class="table table table-hover">
  								<thead>
  									<th>Id</th>
  									<th>Nombre</th>
  									<th>Direccion</th>
  									<th>Correo</th>
  									<th>Ciudad</th>
  									<th>Regimen</th>
  									<th>Otros</th>
  									<th>Ciudad</th>
  									<th>Regimen</th>
  									<th>Otros</th>
  									
  								</thead>
  								<tbody>
  									<tr>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										
  									</tr>
  									<tr>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										
  									</tr>
  									<tr>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										<td>Item</td>
  										
  									</tr>
  								</tbody>
 							 </table>
						</div>
				  		</div>
				  	</div>
				  </div>
				</div>
			</div>
		</div>
</body>
</html>
   
			
				  		
				  		

				    

					
				
		
