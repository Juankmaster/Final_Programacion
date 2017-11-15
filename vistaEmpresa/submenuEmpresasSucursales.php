<!-- Codigo php para mostrar de Depar los Departamentos  en el menu Ajustes-->

 <?php 
      include '../modeloSucursal/modelo_sucursal.php';
 		 $sucursal=new Sucursal();
		 $listado=$sucursal->listado();
 ?>

	
<!-- estructura para mostrar el submenu Departamentos -->
<div class="row" >
<div class="col-sm-4" >

<!-- Tablas para mostrar los Departamentos que existen -->
 <div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3"><span>SUCURSALES</span></div>
   	 <div class="table-responsive">
      <table class="table"  >
	     <tbody>
			  <?php foreach($listado as $fila){ ?>
        <tr>
          <td class="edit_sucursal" title="<?php echo $fila['id_sucursal'] ?>">&nbsp;&nbsp;<?php echo $fila['Nom_sucursal'] ?></td>
             <td>
               <a href="#" class="borrar_sucursal" title="<?php echo $fila['id_sucursal'] ?>" >
               <i class="fa fa-trash pull-right" aria-hidden="true"></i>
               </a>
             </td>
         </tr>
        <?php } ?>
       </tbody>
     </table>
     </div>
  </div>
  </div>
<!-- Panel donde se mostrara el  formulario para editar Sucursales-->

	<div class="col-sm-8">
		<div id="editar">	
		  <a href="#" id="nueva_sucursal"><i class="fa fa-plus-circle" aria-hidden="true">
         </i> Sucursal</a>
        
	  </div> 
	</div>
         
</div>
     

		

 <script language="javascript">
	$(document).ready(Inicio);
 </script>	
