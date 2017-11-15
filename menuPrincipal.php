<?php 
	session_start();

      $rol=$_SESSION["Rol"];
  
	if (isset($_SESSION["sesion_user"])) {
		/*session_destroy(); */
		
	}else{
		
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
	    <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="bootstrap/estiloMenuPrincipal.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="bootstrap/js/funcionesJquery.js"></script>
		
	 
</head>
<body class="container">
	
	<div class="container-principal" >
		<!-- <header> -->
		<nav class="navbar navbar-defaul">
		 <div class="navbar navbar-brand"><p>Control-Soft®</p></div>
		 <div class="collapse navbar-collapse navmenu">
		   <ul class="nav navbar-nav  navbar-right">
			<li><a href="#">Empresa:<code><?php echo $_SESSION["empresa"]?></code></a></li>
			<li><a href="#">Hola:<code><?php echo $_SESSION["sesion_user"]?></code></a></li>
			<li class="dropdown">
			 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"> OPCIONES 
		     <span class="caret"></span></a>
		      <ul class="dropdown-content " role="menu">
	           <a href="#" id="idiomas">Idioma</a>
	           <a href="#" id="contraseña">Cambiar contraseña</a>
	           <a href="#" id="logaut">Cerrar sesion</a>
		      </ul>
			</li>
		    </ul>
          </div>
		 </nav>
	  </div>
	  <br>				
						
	<!-- menu navegacion -->

	<div class="panel" >
		<div class="row"  >
	<!-- Boton que me lleva al submenu de empresas -->
		<div class="col-sm-3" style="padding:0px 0px 0px 0px ">
			<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
			<li role="precentacion" ><a href="#" id="empresas" class="btn btn-alert btn-lg "> <i class="fa fa-industry" ></i> EMPRESA</a></li>
			</ul>			
		</div>
		<!-- Boton que me lleva al submenu de selecciones -->
		<div class="col-sm-3" style="padding:0px 0px 0px 0px ">
			<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
				<li role="precentacion"><a href="#"id="selecciones"class="btn btn-succes btn-lg"><i class="fa fa-futbol-o" aria-hidden="true"></i> SELECCIONES</a></li>
			</ul>			
		</div>
		<!-- Boton que me lleva al submenu de Reportes -->
		<div class="col-sm-3" style="padding:0px 0px 0px 0px">
			<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
				<li role="precentacion" id="reportes"><a href="#" class="btn btn-succes btn-lg"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> REPORTES</a></li>
			</ul>			
		</div>
		<!-- Boton que me lleva al submenu de ajustes -->
		<div class="col-sm-3 ajuste" style="padding:0px 0px 0px 0px">
			<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
			<li role="precentacion" id="ajustes" class="ajustes"><a href="#"class="btn btn-succes btn-lg"id="ajuste"><i class="fa fa-wrench"aria-hidden="true"></i> AJUSTES</a></li>
			</ul>			
		</div>
       </div>
	<!-- main-2 precentacion-->
	<!-- Panel donde se muestran los diferentes submenus de los menus principales(empresas,Selecciones,reportes, ajustes) -->
       <center>
		 <div class="cajas" id="mostrar">
		  <span ><img  style="margin-top:200px, 50%;height:50%;" src="imagenes/logot_1.png">
		  </span>
		 </div>
	   </center>
     </div>

     <!-- footer -->
		 <div class="container-fluid" style="background:blue ">
		 	<span>Control-Soft®</span>
		 </div>

     <!-- Funcion de logica del menu principal -->

   <script language="javascript">
   	  $(document).ready(menuPrincipal);
   	 </script>
		   
<!-- Codigo para los  permisos de los distintos usuarios del sistema -->

<!-- Rol 1 Visitante -->
 <?php   if($rol==1) {?> 
          <script type="text/javascript">
              $(document).ready(function Rol_Admin_empresa () {
	            $("#selecciones").css("display", "none");
	             $("#ajustes").css("display", "none");
	   	 });
		   </script>
      <?php } ?> 

<!-- Rol 2 Administrador del Sistema -->
      <?php if($rol==2){?>
           <script type="text/javascript">
          $(document).ready(function Rol_Admin_empresa () {
	           $("#empresas").css("display", "none");
	            $("#selecciones").css("display", "none");
	   	 });
		   </script>
	   <?php } ?>

<!-- Rol 3 Gestor de Empresa -->
	    <?php  if($rol==3){?>
           <script type="text/javascript">
          $(document).ready(function Rol_Admin_empresa () {
	           $("#ajustes").css("display", "none");	         
	   	 });
		   </script>
	   <?php }?> 

<!-- Rol 5 Cordinador General -->
	    <?php  if($rol==5){?>
           <script type="text/javascript">
          $(document).ready(function Rol_Admin_empresa () {
	           $("#ajustes").css("display", "none");
	             $("#empresas").css("display", "none");	         
	   	 });
		   </script>
	   <?php }?>

<!-- Rol 6 Tecnico -->
	   <?php   if($rol==6) {?> 
      <script type="text/javascript">
          $(document).ready(function Rol_Admin_empresa () {
             $("#ajustes").css("display", "none");
	             $("#empresas").css("display", "none");	
           
   	 });
	   </script>
  <?php } ?>  
</body>
</html>	

      


		 





