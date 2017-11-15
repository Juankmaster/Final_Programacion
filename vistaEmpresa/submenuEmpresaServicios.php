<!-- Codigo php para mostrar de Depar los Departamentos  en el menu Ajustes-->

 <?php 
      include '../modeloServicio/modelo_servicio.php';
 		 $servicio=new Servicio();
		 $listado=$servicio->listado();
 ?>

	
<!-- estructura para mostrar el submenu Departamentos -->
<div class="row" >
<div class="col-sm-4" >

<!-- Tablas para mostrar los Departamentos que existen -->
 <div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3"><span>SERVICIOS</span></div>
   	 <div class="table-responsive">
      <table class="table"  >
	     <tbody>
			  <?php foreach($listado as $fila){ ?>
        <tr>
          <td class="edit_servicio" title="<?php echo $fila['id_servicio']?>">&nbsp;&nbsp;
               <?php echo $fila['Nom_servicio']?></td>
             <td>
               <a href="#" class="borrar_servicio" title="<?php echo $fila['id_servicio']?>" >
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
<!-- Panel donde se mostrara el  formulario para editar Servicios-->

	<div class="col-sm-8">
		<div id="editar">	
		  <a href="#" id="nuevo_servicio"><i class="fa fa-plus-circle" aria-hidden="true">
         </i> Servicio</a>
        
	  </div> 
	</div>
         
</div>
     
 <script language="javascript">
	$(document).ready(Inicio);
 </script>	

    
