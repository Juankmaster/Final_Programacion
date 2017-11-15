<?php

	include '../modeloContrato/modelo_contrato.php';
		     $contrato=new Contrato();
	         $resultadoC= $contrato->lista();
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
			<th>Servicio</th>
			<th>Contratista</th>
			<th>Contratante</th>
			<th>Responsable</th>
			<th>Duracion</th>
			<th>Inicio</th>
			<th>Fin</th>
			<th>Domicilio</th>
			<th>Costo</th>
			<th>Pago</th>
			<th>Clausula</th>
		</tr>
	</thead>
	<tbody>
	    <?php foreach($resultadoC as $fila){ ?>
			<tr>
				<td><?php echo $fila['Num_contrato'] ?>                 </td>
				<td><?php echo utf8_encode($fila['Nom_servicio']) ?>    </td>
				<td><?php echo utf8_encode($fila['Nom_proveedor']) ?>   </td> 
				<td><?php echo utf8_encode($fila['Nom_empresa']) ?>     </td> 
				<td><?php echo utf8_encode($fila['Nom_empleado'])?>     </td> 
				<td><?php echo utf8_encode($fila['Duracion_contrato'])?></td> 
				<td><?php echo utf8_encode($fila['Fecha_inicio']) ?>    </td> 
				<td><?php echo utf8_encode($fila['Fecha_fin']) ?>       </td> 
				<td><?php echo utf8_encode($fila['Nom_ciudad']) ?>      </td>     
				<td><?php echo utf8_encode($fila['Costo']) ?>           </td> 
				<td><?php echo utf8_encode($fila['Forma_pago']) ?>      </td> 
				<td><?php echo utf8_encode($fila['Clausulas']) ?>       </td> 
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
	


			
             
       


			