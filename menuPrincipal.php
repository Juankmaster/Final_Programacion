 <!-- Codigo para el inicio de seccion -->
 <?php 
	session_start();
  
	if (isset($_SESSION["sesion_user"])) {
		/*session_destroy(); */
	}else{
		/* session_destroy();*/
		 header("Location:login.php"); 

	}

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Panel de Control</title>
	<link rel="shortcut icon" href="imagenes/favicon.ico"/>
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/estilos.css">
	<script type="text/javascript" src="bootstrap/js/funcionesJquery.js"></script>
	<!-- <script type="text/javascript" src="bootstrap/js/jquery.js"></script> -->
	 <script language="javascript">

	 /*funcion principal de jquery*/
	 
	  $(document).ready(Inicio);
	
	</script>
</head>
<body class="principal">
	
	<div class="container-principal" >
		<!-- <header> -->
			<nav class="navbar navbar-defaul">
				
					<a href="#" class="navbar navbar-brand"><p>Control-Soft®</p></a>
				<div class="con">
				</div>
				<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav  navbar-right">
				<li><a href="#">Hola:<code><?php echo $_SESSION["sesion_user"]?></code></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"> OPCIONES 
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu " role="menu">
						<li ><a href="#">item #1</a></li>
						<li><a href="#">item #2</a></li>
						<!-- <li class="divider"></li> -->
						<li><a href="#">item #3</a></li>
					</ul>
				</li>
			</ul>
				</div>
				
			</nav>
	</div>
	<br>
	<!-- menu navegacion -->
	<div class="panel" >
		<div class="row"  style="box-shadow: inset 2px -5px 13px 1px">
	<!-- Boton que me lleva al submenu de empresas -->
		<div class="col-sm-3" style="padding:0px 0px 0px 0px ">
			<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
				<li role="precentacion" id="empresas"><a href="#" class="btn btn-succes btn-lg "> <span class="glyphicon glyphicon-stats"></span> EMPRESA</a></li>
			</ul>			
				
		</div>
		<!-- Boton que me lleva al submenu de selecciones -->
		<div class="col-sm-3" style="padding:0px 0px 0px 0px ">
			<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
				<li role="precentacion" id="selecciones"><a href="#" class="btn btn-succes btn-lg"><span class="glyphicon glyphicon-asterisk"></span> SELECCIONES</a></li>
			</ul>			
		</div>
		<!-- Boton que me lleva al submenu de Reportes -->
		<div class="col-sm-3" style="padding:0px 0px 0px 0px">
			<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
				<li role="precentacion" id="reportes"><a href="#" class="btn btn-succes btn-lg"><span class="glyphicon glyphicon-share"></span> REPORTES</a></li>
			</ul>			
		</div>
		<!-- Boton que me lleva al submenu de ajustes -->
		<div class="col-sm-3" style="padding:0px 0px 0px 0px">
			<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
				<li role="precentacion" id="ajustes" class="ajustes"><a href="#" class="btn btn-succes btn-lg"><span class="glyphicon glyphicon-wrench"></span> AJUSTES</a></li>
			</ul>			
		</div>
</div>
	<!-- main-2 precentacion-->
				<center>
	<!-- Panel donde se muestran los diferentes submenus de los menus principales(empresas,Selecciones,reportes, ajustes) -->
					<div class="cajas" id="mostrar">
						<span ><img  style="margin-top:110px,width: 50%;height:50%;" src="imagenes/logot_1.png">
						</span>
						<p><h2></h2></p>
					</div>
				</center>
	</div>
</body>
</html>
					

				
		


	
						
					

					

				
				
				


					
			
				
          
             



		
		
					
																																														
	