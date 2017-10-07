<?php 

 include '../modelo/modelo_rol.php';
 			$id_rol=$_POST["id_rol"];
 		    $rol=new Roles();
		   $resultado= $rol->consultar_rol($id_rol);	
		 

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
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
 </head>
 <body>

 	<form id="f_a_roles" role="form" method="post">
		<div class="panel-group">
			<div class="panel panel-primary" style="width:600px;">
			<!-- <div class="panel-heading" style="background:#0971B3">
				Editar Rol
			</div> -->
				<div class="panel-body">
				</div>
				<div class="form-group">
				<label  for="id_rol"> Id Rol&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
				<input type="text" size="18px" readonly="true" value="<?php echo trim($resultado[0]['id_rol']);?>" name="id_rol">
				</div>
				<div class="form-group">
				<label  for="nom_rol">Nombre&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</label>
				<input type="text" size="18px"value=" <?php echo trim($resultado[0]['Nom_Rol']);?>" name="nom_rol">
				</div>
				<div class="form-group">
				<label  for="nombre_pais">Descripcion &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</label>
				<textarea value="" name="desc_rol"> <?php echo trim($resultado[0]['Des_Rol']); ?></textarea>
				</div>
				<input type="submit" class="btn btn-primary " id="actualizar_rol" value="Actualizar"><br><br>
				<input type="hidden"  name="accion" value="actualiza_rol"/>
			</div>
		</div>
	</form>   
 	



 </body>
 </html>