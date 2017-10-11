 <!-- Codigo php para realizar el crud de Roles -->

 <?php 
      include '../modeloUsuario/modelo_usuario.php';
 		 $usuario=new Usuarios();
		 $listado=$usuario->listado_Usuario();
 ?>

	
<!-- estructura del formulario para crear submenu de Paises (campos de texto botones etc)  -->
<div class="row" >
<div class="col-sm-4" >

<!-- Tablas para mostrar los roles que existen -->
 <div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3">Usuarios</div>
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
<!-- Panel donde se mostrara el  formulario para editar los Roles -->
	<div class="col-sm-8">
		<div id="editar">	
		<a href="#" id="nuevo_usuario"><span class="glyphicon glyphicon-plus"></span> USUARIO</a>

	    </div> 
	    <!--Boton para invocar el formulario  de Nuevo Rol-->
	</div>
         
</div>
		

 <script language="javascript">
	$(document).ready(Inicio);
 </script>	

	
		  
	