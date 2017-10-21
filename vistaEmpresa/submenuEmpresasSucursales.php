<!-- Codigo php para mostrar de Depar los Departamentos  en el menu Ajustes-->

 <?php 
      include '../modeloEmpresa/modelo_empresa.php';
 		 $empresa=new Empresa();
		 $listado=$empresa->listado_Empresa();
 ?>

	
<!-- estructura para mostrar el submenu Departamentos -->
<div class="row" >
<div class="col-sm-4" >

<!-- Tablas para mostrar los Departamentos que existen -->
 <div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3">Empresas</div>
   	 <div class="table-responsive">
      <table class="table"  >
	   <tbody>
			<?php foreach($listado as $fila){ ?>
          <tr>
    <td class="edit_empre" title="<?php echo $fila['id_empresa'] ?>">&nbsp;&nbsp;<?php echo $fila['Nom_empresa'] ?></td>
    <td><a href="#" class="borrar_empresa" title="<?php echo $fila['id_empresa'] ?>" ><i class="fa fa-trash pull-right" aria-hidden="true"></i>
     </a></td>
         </tr>
            <?php } ?>
       </tbody>
     </table>
     </div>
  </div>
  </div>
<!-- Panel donde se mostrara el  formulario para editar Empresa -->
	<div class="col-sm-8">
		<div id="editar">	
		  <a href="#" id="nueva_empresa"><i class="fa fa-plus-circle" aria-hidden="true"></i> Empresa</a>
	  </div> 
	</div>
         
</div>
     

		

 <script language="javascript">
	$(document).ready(Inicio);
 </script>	
