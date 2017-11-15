 <?php

	include '../modeloTecnico/modelo_tecnico.php';
		     $tecnico=new Tecnico();
	         $resultadoT= $tecnico->listado();
?>

   <div class="box-header">
    <i class="ion ion-clipboard"></i>  
    </div>
    <div class="box-body">
    	
	<table id="tabla" class="table table-striped table-bordered table-hover" 
	       cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Celular</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
	    <?php foreach($resultadoT as $fila){ ?>
			<tr>
				<td><?php echo $fila['id_tecnico'] ?>                </td>
				<td><?php echo utf8_encode($fila['Nom_tecnico']) ?>  </td>
				<td><?php echo utf8_encode($fila['Ape_tecnico']) ?>  </td> 
				<td><?php echo utf8_encode($fila['Cel_tecnico']) ?>  </td> 
				<td><?php echo utf8_encode($fila['Email_tecnico'])?> </td> 
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
	