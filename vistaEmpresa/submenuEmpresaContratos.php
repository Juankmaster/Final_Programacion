<?php 

include '../modeloContrato/modelo_contrato.php';
         $contrato=new Contrato();
         $listado=$contrato->listado();
        
?>
  
<!-- estructura para mostrar el submenu Contratos -->
<div class="row" >
<div class="col-sm-4" >

<!-- Tablas para mostrar los contratos que existen -->
 <div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3"><span>CONTRATOS</span> </div>
     <div class="table-responsive">
      <table class="table"  >
     <tbody>
                      
      <?php foreach($listado as $fila){ ?>
          <tr>
    <td class="edit_contrato" title="<?php echo $fila['Num_contrato']?>">&nbsp;&nbsp;<?php echo $fila['Num_contrato']?></td>
    <td><a href="#" class="borrar_contrato" title="<?php echo $fila['Num_contrato'] ?>"><i class="fa fa-trash pull-right" aria-hidden="true"></i>
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
      <a href="#" id="nuevo_contrato"><i class="fa fa-plus-circle" aria-hidden="true"></i> Contrato</a>
    </div> 
  </div>
         
</div>
             
 <script language="javascript">
  $(document).ready(Inicio);
 /* $(document).ready(funcionfiltro);*/
 </script>
      
     

    


   
    

