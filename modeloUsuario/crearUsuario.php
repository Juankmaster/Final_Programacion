
<!-- Codigo para crear Usuarios en el submenu usuarios del menu Ajustes -->
<?php

include '../modelo/modelo_rol.php';
 		    $rol=new Roles();
		   $resultados= $rol->listado_roles();

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>crearUsuario</title>
	<script type="text/javascript" src="bootstrap/js/funcionesJquery.js"></script>
	 <script type="text/javascript"  src="bootstrap/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script language="javascript">
	$(document).ready(Inicio);
	</script>
</head>
<body>
	<form method="post" id="f_n_usuario">
		<div class="panel-group">
			
			<div class="panel panel-primary" style="width:600px;">
			<!-- <div class="panel-heading" style="background:#0971B3">
				Editar Rol
			</div> -->
				<div class="panel-body">
				</div>
				  <div class="form-group">
				   <label  for="nom_usuario">Nombre &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</label>
				   <input type="text" size="18px" name="nom_usuario">
				</div>
				<div class="form-group">
				  <label  for="email_usuario">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
				  <input type="email" size="18px" name="email_usuario">
				</div>
				<div class="form-group">
				  <label  for="pass_usuario">Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
				  <input type="password" size="18px" name="pass_usuario">
				</div>
				<div class="form-group">
				  <label  for="rol_usuario">Rol &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</label>
				  <!-- 	<select name="rol_usuario">
				    					<?php foreach ($resultados as $row) {?>
				    						 <option  value="<?php echo $row['id_Rol']; ?>">
				    						 <?php 	echo $row['Nom_Rol']; ?>
				    					   </option>
				    				<?php }  ?>
				    </select> -->  
				</div>
				  <input type="submit" class="btn btn-primary " id="crear_usuario" value="Crear">
				   <input type="button" class="btn btn-info " id="cancelar_usuario" value="Cancelar">
				  <br><br>
				  <input type="hidden"  name="accion" value="crear_usuario"/>
			</div>
		</div>
	</form>
	
</body>
</html>