<?php 

include '../modeloSede/modelo_sede.php';
         $sede=new Sede();
         $listado=$sede->listado();

 ?>
  
<!-- estructura para mostrar el submenu Departamentos -->
<div class="row" >
<div class="col-sm-4" >

<!-- Tablas para mostrar los Departamentos que existen -->
 <div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3"><span>SEDES</span></div>
     <div class="table-responsive">
      <table class="table"  >
     <tbody>
      <?php foreach($listado as $fila){ ?>
          <tr>
            <td class="edit_sede" title="<?php echo $fila['id_sede']?>">&nbsp;&nbsp;
                <?php echo $fila['Nom_sede']?></td>
            <td><a href="#"class="borrar_sede" title="<?php echo $fila['id_sede'] ?>" >
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
      <a href="#" id="nueva_sede"><i class="fa fa-plus-circle"aria-hidden="true"></i> Sede</a>
    </div> 
  </div>
         
</div>
     
 <script language="javascript">
  $(document).ready(Inicio);
 </script>  

    