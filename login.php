<?php 
session_start();

 ?>
 
<!-- Codigo php que controla el formulario login  -->
<!-- Pagina de login  -->

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="shortcut icon" href="imagenes/favicon.ico"/>
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/estiloLogin.css">
</head>
<body class="logos">
	<header >
		<br>
			<div class="row conten">
				<div class="col-sm-12">
				<center><img src="imagenes/logocecep.png"></center>	
				</div>
			</div>
	</header>
	<!-- main -->
	<br>

		<!-- Contenedor del formulario de Login -->
	<div>
		<center>	
			<div class="container-fluid">
				<div class="conta-1">
				<form  role="form" method="post" action="control/controladorLogin.php" class="form_login">
					
					<div class="form-group">
						<label  for="cod_empresa">Codigo Empresa</label>
						<input type="text" class="form-control" name="cod_empresa" required placeholder="Campo Requerido">
						<?php 
							if(isset($_SESSION['error1'])){
								echo "<font color='red'>".$_SESSION['error1']."</font>";
							}
								unset($_SESSION['error1']);
						 ?>

				   </div>
				   <div class="form-group">
						<label  for="usuario">Nombre Usuario</label>
						<input type="text" class="form-control" name="usuario" required placeholder="Campo Requerido">
							<?php 
							if(isset($_SESSION['error2'])){
								echo "<font color='red'>".$_SESSION['error2']."</font>";
							}
								unset($_SESSION['error2']);
						 ?>

				   </div>
				   <div class="form-group">
						<label  for="clave">Contraseña</label>
						<input type="password" class="form-control" name="clave" required placeholder="Campo Requerido">
						<?php 
							if(isset($_SESSION['error3'])){
								echo "<font color='red'>".$_SESSION['error3']."</font>";
							}
								unset($_SESSION['error3']);
						 ?>
				   </div>
				   <div class="form-group">
				   	  <label><input type="checkbox" name="remember"> Mantener Logueado</label>
						
		<center>
			<input type="submit" class="btn-btn-default btn-lg" name="login" value="LOGIN">
			
		
		   </center>
				   </div>
					
				</form>
			</div>
			
			</div>
		</center>
	</div>
	
  
  

	
		
		
	
</body>
</html>