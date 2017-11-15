<?php 

include '../modeloSeleccion/modelo_seleccion.php';
         $seleccion=new Seleccion();
         $listado=$seleccion->listado();

 ?>
  
<!-- estructura para mostrar el submenu Departamentos -->
<div class="row" >
<div class="col-sm-4" >

<!-- Tablas para mostrar los Departamentos que existen -->
 <div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3"><span>SELECCIONES</span></div>
     <div class="table-responsive">
      <table class="table"  >
     <tbody>
      <?php foreach($listado as $fila){ ?>
          <tr>
            <td class="edit_seleccion" title="<?php echo $fila['id_seleccion']?>">&nbsp;&nbsp;
                <?php echo $fila['Nom_seleccion']?></td>
            <td><a href="#"class="borrar_seleccion" title="<?php echo $fila['id_seleccion'] ?>" >
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
      <a href="#" id="nueva_seleccion"><i class="fa fa-plus-circle"aria-hidden="true"></i> Seleccion</a>
    </div> 
  </div>
         
</div>
     
 <script language="javascript">
  $(document).ready(Inicio);
 </script>  

    