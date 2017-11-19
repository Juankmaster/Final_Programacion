<?php
    include '../modeloProcesos/modelo_procesos.php';
 		$proceso = new Procesos();
		$listado = $proceso->listado_Procesos();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SubmenuEmpresas</title>
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link type="text/css" href="bootstrap/css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="bootstrap/estiloMenuPrincipal.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.js">
	<script type="text/javascript" src="bootstrap/js/funcionesJquery.js"></script>
	<script language="javascript" src="bootstrap/js/jquery.validate.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery-ui-1.8.16.custom.min.js"></script>
	 <script language="javascript">/*funcion principal de jquery*/
		$(document).ready(Inicio);
	</script>

</head>
<!-- estructura para mostrar el submenu Empresas -->
<div class="row" >
 <div class="col-sm-4" >
<!-- Tablas para mostrar los Empresas que existen -->
  <div class="panel panel-default">
    <div class="panel-heading" style="background:#0971B3">Procesos</div>
    <div class="table-responsive">
    <table class="table"  >
 	  <tbody>
 		<?php foreach($listado as $fila){ ?>
    <tr>
    <td class="edit_proc" title="<?php echo $fila['id_proc'] ?>">&nbsp;&nbsp;<?php echo $fila['nom_proc'] ?></td>
    <td><a href="#" class="borrar_proceso" title="<?php echo $fila['id_proc'] ?>" ><i class="fa fa-trash pull-right" aria-hidden="true"></i>
    </a></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
   </div>
   </div>
<!-- Panel donde se mostrara el  formulario para editar los Empresa -->
 	  <div class="col-sm-8">
 		<div id="editar">
        <a href="#" id="nuevo_proceso"><i class="fa fa-plus-circle" aria-hidden="true"></i>Proceso</a>
 	  </div>
 <!--Boton para invocar el formulario  de Nuevo Empresa-->
 	</div>
</div>

 <script language="javascript">
	$(document).ready(Inicio);
 </script>

</html>
