<?php 

include '../modeloProceso/modelo_proceso.php';
         $proceso=new Proceso();
         $listado=$proceso->listado();

 ?>

  
<!-- estructura para mostrar el submenu Departamentos -->
<div class="row" >
<div class="col-sm-4" >

<!-- Tablas para mostrar los Departamentos que existen -->
 <div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3"><span>PROCESOS</span></div>
     <div class="table-responsive">
      <table class="table"  >
     <tbody>
      <?php foreach($listado as $fila){ ?>
          <tr>
            <td class="edit_proceso" title="<?php echo $fila['id_proceso']?>">&nbsp;&nbsp;
                <?php echo $fila['Nom_proceso']?></td>
            <td><a href="#" class="borrar_proceso" title="<?php echo $fila['id_proceso'] ?>" >
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
<!-- Panel donde se mostrara el  formulario para editar Empresa -->
  <div class="col-sm-8">
    <div id="editar"> 
      <a href="#" id="nuevo_proceso"><i class="fa fa-plus-circle" aria-hidden="true"></i> Proceso</a>
    </div> 
  </div>
         
</div>
     

    

 <script language="javascript">
  $(document).ready(Inicio);
 </script>  

   