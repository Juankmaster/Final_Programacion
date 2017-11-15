  <?php  
  session_start();

      $rol=$_SESSION['Rol'];
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SubmenuSelecciones</title>
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/estiloMenuPrincipal.css"> -->
</head>
<body>
	
	<!-- main-2 -->
	<div class="principal" >

        	<div class="row" id="menu" >																												
        		<!-- Boton del submenu Selecciones -->
				<div class="col-sm-3 submenu1" >
					<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
						<li role="button" id="seleccion"><a href="#" class="btn btn-primary btn-lg ">SELECCIONES</a></li>
					</ul>			
				</div>
				<!-- Boton del submenu Tecnicos -->
			<div class="col-sm-3 submenu1" >
				<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
					<li role="precentacion" id="tecnico"><a href="#" class="btn btn-primary btn-lg">TECNICOS</a></li>
				</ul>			
			</div>
			<!-- Boton del submenu Encuentros -->
			<div class="col-sm-3 submenu1" >
				<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
					<li role="precentacion" id="encuentros"><a href="#" class="btn btn-primary btn-lg">ENCUENTROS</a></li>
				</ul>			
			</div>

			<!-- Boton del submenu Sedes -->
			<div class="col-sm-3 submenu1" >
				<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
					<li role="precentacion" id="sedes"><a href="#" class="btn btn-primary btn-lg">SEDES</a></li>
				</ul>			
			</div>
	
		<!-- En este panel-body  se cargan los submenus de Usuarios, Empresas,ciudades, paises -->
				 
		</div>
		<div class="panel panel-primary">
		   <div class="panel-body" id="subpanel1"  >
		    <div >

	<!-- Panel donde se muestran los diferentes submenus de los menus principales(empresas,Selecciones,reportes, ajustes) -->
	
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <span class="navbar-brand active"style="color:#000;"><i class="fa fa-tachometer" aria-hidden="true"></i> PANEL SELECCIONES </span>
				      <span class="navbar-brand active"style="color:blue;" id="panel">  </span>
				    </div>
				    <ul class="nav navbar-nav navbar-right">
				      <li><a href="#" id="pselecciones"><iclass="fa fa-simplybuilt" aria-hidden="true"></i> SELECCIONES</a></li>
				      <li><a href="#" id="ptecnicos"><iclass="fa fa-users" aria-hidden="true"></i> TECNICOS</a></li>
				      <li><a href="#" id="pencuentros"><iclass="fa fa-users" aria-hidden="true"></i> ENCUENTROS</a></li>
				     			
				      <li><a href="#" id="cerrar"><i class="fa fa-times "></i></a></li>
				    </ul>
				  </div>
				</nav>
		       <br>
		      <div  id="panel1" style="overflow:auto;">
		      	<span ><img style="margin-top:110px,width:100%;height:100%;" src="imagenes/logot_1.png">
			</span>
		      </div>
		  </div>
		 </div>		
	</div>
</div>		
						 	
     <link rel="stylesheet" type="text/css" href="./DataTable/datatables.min.css"/>
     <script type="text/javascript" src="./DataTable/datatables.min.js"></script>
      <script src = './DataTable/pdfmake-0.1.32/pdfmake.min.js'></script>
      <script src='./DataTable/pdfmake-0.1.32/vfs_fonts.js'></script>
									
	<script >
		$(document).ready(submenuSelecciones);
	</script>
<!-- Rol 6 Tecnico -->
   <?php   if($rol==6) {?> 
      <script type="text/javascript">
          $(document).ready(function Rol_Admin_empresa () {
           $("#menu").css("display", "none");
           
   	 });
	   </script>
  <?php } ?> 
</body>
</html>
           