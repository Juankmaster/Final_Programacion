  <?php  
  session_start();

      $rol=$_SESSION['Rol'];
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SubmenuEmpresas</title>
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/estiloMenuPrincipal.css"> -->
</head>
<body>
	
	<!-- main-2 -->
	<div class="principal" >

        	<div class="row" id="menu" >																												
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
			<div class="col-sm-2 submenu1">
				<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
					<li role="presentacion" id="servicio"><a href="#" id="servicio"class="btn btn-primary btn-lg ">SERVICIOS</a></li>
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
				      <span class="navbar-brand active"style="color:#000;"><i class="fa fa-tachometer" aria-hidden="true"></i> PANEL EMPRESA </span>
				      <span class="navbar-brand active"style="color:blue;" id="panel">  </span>
				    </div>
				    <ul class="nav navbar-nav navbar-right">
				      <li><a href="#" id="pempresas"><i class="fa fa-simplybuilt" aria-hidden="true"></i> EMPRESAS</a></li>
				      <li><a href="#" id="pempleados"><i class="fa fa-users" aria-hidden="true"></i> EMPLEADOS</a></li>
				      <li class="dropdown"><a href="#"><i class="fa fa-map" aria-hidden="true"></i> CONTRATOS</a>
						<div class="dropdown-content">
					      <a href="#" id="pcontratos">Contratos</a>
					      <a href="#" id="pvencer">Proximos a vencer</a>
					      <a href="#" id="historial">Historial</a>					      
						</div>
				      </li>				
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
		$(document).ready(subMenusEmpresa);
	</script>

   <?php   if($rol==1) {?> 
      <script type="text/javascript">
          $(document).ready(function Rol_Admin_empresa () {
           $("#menu").css("display", "none");
   	 });
	   </script>
  <?php } ?> 
</body>
</html>
           
            



				
						   
								
						      
							

    
