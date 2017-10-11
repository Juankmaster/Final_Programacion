<?php 

 include '../modeloUsuario/modelo_usuario.php';
 			$id_usuario=$_POST["id_usuario"];
 		    $usuario=new Usuarios();
		   $resultado= $usuario->consultar_Usuario($id_usuario);	

		   include '../modelo/modelo_rol.php';
 		    $rol=new Roles();
		   $resultados= $rol->listado_roles();
 ?>

<!--  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>submenuAjustesRoles</title>
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/estilos1.css">
	<script type="text/javascript" src="bootstrap/js/funcionesJquery.js"></script>
	 <script language="javascript">
	 
	 /*funcion principal de jquery*/
			$(document).ready(Inicio);
	</script>
</head>

<body> -->
 	<form id="f_a_usuarios" role="form" method="post">
		<div class="panel-group">
			<div class="panel panel-primary" style="width:600px;">
			<!-- <div class="panel-heading" style="background:#0971B3">
				Editar Rol
			</div> -->
				<div class="panel-body">
				</div>
				<!-- <div class="form-group">
				<label  for="id_usuario">Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
				<input type="text" size="18px" readonly="true" value="<?php echo trim($resultado[0]['id_usuario']);?>" name="id_usuario">
				</div> -->
				<div class="form-group">
				<label  for="nom_usuario">Nombre &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</label>
				<input type="text" size="18px"value=" <?php echo trim($resultado[0]['Nom_Usuario']);?>" name="nom_usuario">
				</div>
				<div class="form-group">
				<label  for="email_usuario">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
				<input type="email" size="18px"  value="<?php echo trim($resultado[0]['Email']);?>" name="email_usuario">
				</div>
				<div class="form-group">
				<label  for="roles">Rol &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</label>
				<select name="roles">
					<?php foreach ($resultados as $row) {?>
						 <option value="<?php echo $row['id_Rol']; ?>">
						 <?php 	echo $row['Nom_Rol']; ?>
					   </option>
				<?php }  ?>
				</select>  
				</div>
				<input type="submit" class="btn btn-primary " id="actualizar_usuario" value="Actualizar"><br><br>
				<input type="hidden"  name="accion" value="actualizar_usuario"/>
			</div>
		</div>
	</form>  

	<script language="javascript">
	 
	 /*funcion principal de jquery*/
			$(document).ready(Inicio);
	</script> 
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/funcionesJquery.js"></script>
<!--  </body>
</html> -->

				


		 




 	


