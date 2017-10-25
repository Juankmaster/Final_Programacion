
<?php 

include '../modeloEmpleado/modelo_empleado.php';
         $empleado=new Empleado();
         $listado=$empleado->listado_Empleado();

 ?>

  
<!-- estructura para mostrar el submenu Departamentos -->
<div class="row" >
<div class="col-sm-4" >

<!-- Tablas para mostrar los Departamentos que existen -->
 <div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3">Empleados</div>
     <div class="table-responsive">
      <table class="table"  >
     <tbody>
      <?php foreach($listado as $fila){ ?>
          <tr>
    <td class="edit_empleado" title="<?php echo $fila['id_empleado'] ?>">&nbsp;&nbsp;<?php echo $fila['Nom_empleado']." ".$fila['Ape_empleado'] ?></td>
    <td><a href="#" class="borrar_empleado" title="<?php echo $fila['id_empleado'] ?>" ><i class="fa fa-trash pull-right" aria-hidden="true"></i>
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
      <a href="#" id="nuevo_empleado"><i class="fa fa-plus-circle" aria-hidden="true"></i> Empleado</a>
    </div> 
  </div>
         
</div>
     

    

 <script language="javascript">
  $(document).ready(Inicio);
 </script>  

   