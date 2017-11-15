<?php

	include '../modeloSeleccion/modelo_seleccion.php';
		     $seleccion=new Seleccion();
	         $resultadoS= $seleccion->lista();
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
			<th>Seleccion</th>
			<th>Sede</th>
			<th>Pais</th>
			<th>Tecnico</th>
		</tr>
	</thead>
	<tbody>
	    <?php foreach($resultadoS as $fila){ ?>
			<tr>
				<td><?php echo $fila['id_seleccion'] ?>               </td>
				<td><?php echo utf8_encode($fila['Nom_seleccion'])?>  </td>
				<td><?php echo utf8_encode($fila['Nom_sede'])?>       </td> 
				<td><?php echo utf8_encode($fila['Nom_pais'])?>       </td> 
				<td><?php echo utf8_encode($fila['Nom_tecnico'].' '.$fila['Ape_tecnico'])?></td> 
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
	