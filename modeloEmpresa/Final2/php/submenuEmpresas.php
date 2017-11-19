<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SubmenuEmpresas</title>
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link type="text/css" href="bootstrap/css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="bootstrap/estiloMenuPrincipal.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.js">
	<script type="text/javascript" src="bootstrap/js/funcionesJquery.js"></script>
	<script language="javascript" src="bootstrap/js/jquery.validate.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery-ui-1.8.16.custom.min.js"></script>

</head>

<body>
	<!-- main-2 -->
	<div class="principal" >

        	<div class="row"  >
        		<!-- Boton del submenu Usuarios -->
				<div class="col-sm-2 submenu1" >
					<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
						<li role="button" id="sucursales"><a href="#" class="btn btn-primary btn-lg ">SUCURSALES</a></li>
					</ul>
				</div>
				<!-- Boton del submenu Empresas -->
			<div class="col-sm-2 submenu1" >
				<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
					<li role="precentacion" id="empleados"><a href="#" class="btn btn-primary btn-lg">EMPLEADOS</a></li>
				</ul>
			</div>
			<!-- Boton del submenu Ciudades -->
			<div class="col-sm-2 submenu1" >
				<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
					<li role="precentacion" id="procesos"><a href="#" class="btn btn-primary btn-lg">PROCESOS</a></li>
				</ul>
			</div>
			<!-- Boton del submenu Paises -->
			<div class="col-sm-2 submenu1" >
				<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
					<li role="presentacion" id="contratos"><a href="#" class="btn btn-primary btn-lg">CONTRATOS</a></li>
				</ul>
			</div><!-- Boton del submenu Roles -->
			<div class="col-sm-2 submenu1" >
				<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
					<li role="presentacion" id="proveedores"><a href="#" id="rol" class="btn btn-primary btn-lg ">PROVEEDORES</a></li>
				</ul>
			</div><!-- Boton del submenu Departamentos -->
			<!-- <div class="col-sm-2 submenu1">
				<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
					<li role="presentacion" id="departamentos"><a href="#" class="btn btn-primary btn-lg ">DEPARTAMENTOS</a></li>
				</ul>
			</div> -->
		<!-- Panel contenedor del submenu Gestion de Usuarios -->
		<!--   <div class="panel panel-default"-->
		<!-- En este panel-body  se cargan los submenus de Usuarios, Empresas,ciudades, paises -->
		</div>
		<div class="panel panel-primary">
		   <div class="panel-body" id="subpanel1">
		    <center>
	<!-- Panel donde se muestran los diferentes submenus de los menus principales(empresas,Selecciones,reportes, ajustes) -->
		<div>
			<span ><img  style="margin-top:110px,width: 50%;height:50%;" src="imagenes/logot_1.png">
			</span>
			<p><h2> BIENVENIDO AL MENU DE EMPRESAS</h2></p>
		</div>
			</center>
		 </div>
		 </div>
	</div>
	 <!--funcion principal de jquery-->
	 <script language="javascript">
			$(document).ready(Inicio);
	</script>
</body>
</html>
