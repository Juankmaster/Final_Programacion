<!-- Codigo php para mostrar Ciudades  en el menu Ajustes-->

 <?php 
      include '../modeloCiudad/modelo_ciudad.php';
     $ciudad=new Ciudad();
     $listado=$ciudad->listado_Ciudad();
 ?>

  
<!-- estructura para mostrar el submenu Ciudades-->
<div class="row" >
<div class="col-sm-4" >

<!-- Tablas para mostrar los Departamentos que existen -->
 <div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3">Ciudades</div>
     <div class="table-responsive">
      <table class="table"  >
     <tbody>
      <?php foreach($listado as $fila){ ?>
          <tr>
    <td class="edit_ciudad" title="<?php echo $fila['id_ciudad'] ?>">&nbsp;&nbsp;<?php echo $fila['Nom_ciudad'] ?></td>
    <td><a href="#" class="borrar_ciudad" title="<?php echo $fila['id_ciudad'] ?>" ><i class="fa fa-trash pull-right" aria-hidden="true"></i>
     </a></td>
         </tr>
            <?php } ?>
       </tbody>
     </table>
     </div>
  </div>
  </div>
<!-- Panel donde se mostrara el  formulario para editar Ciudad -->
  <div class="col-sm-8">
    <div id="editar"> 
      <a href="#" id="nueva_ciudad"><i class="fa fa-plus-circle" aria-hidden="true"></i> Ciudad</a>
    </div> 
  </div>
         
</div>
     

    

 <script language="javascript">
  $(document).ready(Inicio);
 </script>  
