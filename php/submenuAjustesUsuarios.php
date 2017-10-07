<?php 
      include '../modeloUsuario/modelo_usuario.php';
 		 $usuario=new Usuarios();
		 $listado=$usuario->listado_Usuario();
 ?>


<!-- Codigo del submenu ajustes -->

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SubmenuEmpresas</title>
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/estilos1.css">
	<script type="text/javascript" src="bootstrap/js/funcionesJquery.js"></script>
	 <script language="javascript">
	 /*funcion principal de jquery*/
			$(document).ready(Inicio);
	</script>
	

</head>
   <body>
	
          <!-- espacio donde se cargan los demas submenus  -->
<div class="row" >

<!-- estructura del formulario para crear el submenu de Usuarios(campos de texto botones etc)  -->
				<div class="col-sm-4">
		  			<!-- lista Usuarios creados -->
<div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3"><span>Usuarios</span></div>
   	 <div class="table-responsive">
      <table class="table"  >
	   <tbody>
			<?php foreach($listado as $fila){ ?>
          <tr>
    <td class="editar_usuario"  title="<?php echo $fila['id_usuario'] ?>">&nbsp;&nbsp;<?php echo $fila['Nom_Usuario'] ?></td>
    <td><a href="#" class="borrar_usuario" title="<?php echo $fila['id_usuario'] ?>" ><span class="glyphicon glyphicon-trash pull-right"></span></a></td>
         </tr>
            <?php } ?>
       </tbody>
     </table>
     </div>
  </div>
</div>
<!-- Diseño del formulario para crear nuevos Usuarios -->
             <div class="col-sm-8">
	    <!--Boton para invocar el formulario  de Nuevo Rol-->
	    <a href="#" id="nuevo_usuario"><span class="glyphicon glyphicon-plus"></span> USUARIO</a>
		 <div class="editar">	
			   </div> 
			 </div>		
			</div>
		  <!-- </div>
		  	  	</div>
		  	  </div>
		  	</div>
		    </div>
		   </div>
		  </div> -->
					
	  	
					
		
</body>
</html>
   