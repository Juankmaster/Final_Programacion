<?php
	require_once('modelo_empresa.php');
	$empresa = new Empresa();
	$listado = $empresa->lista();
?>
<!-- <div class="box-header" style="background:#0971B3"><span>CONSULTA EMPRESAS</span>
    <i class="ion ion-clipboard"></i>
  
       </div><br> -->
<div class="box-body">
  <table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0"
       width="100%">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Email</th>
			<th>Ciudad</th>			
		</tr>
	</thead>
	<tbody>
	    <?php foreach($listado as $fila){ ?>
			<tr>
				<td><?php echo $fila['id_empresa'] ?> </td>
				<td><?php echo utf8_encode($fila['Nom_empresa']) ?> </td>
				<td><?php echo utf8_encode($fila['Dir_empresa']) ?> </td> 
				<td><?php echo utf8_encode($fila['Tel_empresa']) ?> </td> 
				<td><?php echo utf8_encode($fila['Email_empresa'])?></td> 
				<td><?php echo utf8_encode($fila['Nom_ciudad']) ?> </td> 
			</tr>
	    <?php } ?>
	</tbody>
</table>

</div>

<!-- Funciones de Lógica de neogcio -->
<script>
	$(document).ready(Inicio);
    $(document).ready(function() { $('#tabla').DataTable( { dom: 'Bfrtip', buttons: [ 'copy', 'csv', 'excel', 'pdf', 'print' ] } ); } );
</script>