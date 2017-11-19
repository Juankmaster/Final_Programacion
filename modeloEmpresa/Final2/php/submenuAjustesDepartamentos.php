<!-- Codigo php para mostrar de Depar los Departamentos  en el menu Ajustes-->

 <?php
      include '../modeloDepartamento/modelo_departamento.php';
 		 $departamento=new Departamento();
		 $listado=$departamento->listado_Departamento();
 ?>


<!-- estructura para mostrar el submenu Departamentos -->
<div class="row" >
<div class="col-sm-4" >

<!-- Tablas para mostrar los Departamentos que existen -->
 <div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3">Departamentos</div>
   	 <div class="table-responsive">
      <table class="table"  >
	   <tbody>
			<?php foreach($listado as $fila){ ?>
          <tr>
    <td class="editar_departamento" title="<?php echo $fila['id_departamento'] ?>">&nbsp;&nbsp;<?php echo $fila['Nom_departamento'] ?></td>
    <td><a href="#" class="borrar_departamento" title="<?php echo $fila['id_departamento'] ?>" ><i class="fa fa-trash pull-right" aria-hidden="true"></i>
     </a></td>
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
		<a href="#" id="nuevo_departamento"><i class="fa fa-plus-circle" aria-hidden="true"></i> Departamento</a>
	  </div> 
	    <!--Boton para invocar el formulario  de Nuevo Departamento-->
	</div>

</div>


 <script language="javascript">
	$(document).ready(Inicio);
 </script>
