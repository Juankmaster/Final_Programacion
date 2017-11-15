<?php 

include '../modeloEncuentros/modelo_encuentros.php';
         $encuentro=new Encuentro();
         $listado=$encuentro->listado();

 ?>
  
<!-- estructura para mostrar el submenu Departamentos -->
<div class="row" >
<div class="col-sm-4" >

<!-- Tablas para mostrar los Departamentos que existen -->
 <div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3"><span>ENCUENTROS</span></div>
     <div class="table-responsive">
      <table class="table"  >
     <tbody>
      <?php foreach($listado as $fila){ ?>
          <tr>
            <td class="edit_encuentro" title="<?php echo $fila['id_encuentro']?>">&nbsp;&nbsp;
                <?php echo $fila['id_encuentro']?></td>
            <td><a href="#"class="borrar_encuentro" title="<?php echo $fila['id_encuentro']?>">
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
      <a href="#" id="nuevo_encuentro"><i class="fa fa-plus-circle"aria-hidden="true"></i>        Encuentro</a>
    </div> 
  </div>
         
</div>
  <link rel="stylesheet" type="text/css" href="bootstrap/estiloMenuPrincipal.css"> 
    <script language="javascript" src="bootstrap/js/jquery.validate.js"></script> 
        
 <script language="javascript">
  $(document).ready(Inicio);
 </script>  

    