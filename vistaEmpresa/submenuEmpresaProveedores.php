<?php 

include '../modeloProveedor/modelo_proveedor.php';
         $proveedor=new Proveedor();
         $listado=$proveedor->listado();

 ?>

  
<!-- estructura para mostrar el submenu Departamentos -->
<div class="row" >
<div class="col-sm-4" >

<!-- Tablas para mostrar los Proveedores que existen -->
 <div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3"><span>PROVEEDORES</span></div>
     <div class="table-responsive">
      <table class="table"  >
       <tbody>
          <tr>
      <!-- <td >id <input type="text" size="5";></td> -->
        <!-- <td >Filtrar <select class="filtro" name="filtrar">
                <option>Id</option>
                <option>Contratante</option>
                </select>
             </td>
            </tr>
              -->
               
          <?php foreach($listado as $fila){ ?>
          <tr>
            <td class="edit_proveedor" title="<?php echo $fila['id_proveedor'] ?>">&nbsp;&nbsp;
               <?php echo $fila['Nom_proveedor']?></td>
              <td><a href="#" class="borrar_proveedor" title="<?php echo $fila['id_proveedor'] ?>" >
                <i class="fa fa-trash pull-right" aria-hidden="true"></i></a>
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
      <a href="#" id="nuevo_proveedor"><i class="fa fa-plus-circle" aria-hidden="true"></i> Proveedor</a>
     </div> 
   </div>
 </div>
         
 <script language="javascript">
  $(document).ready(Inicio);
 </script>  
      