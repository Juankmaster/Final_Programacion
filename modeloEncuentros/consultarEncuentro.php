<?php

	include '../modeloEncuentros/modelo_encuentros.php';
		     $encuentro=new Encuentro();
	         $resultadoE= $encuentro->lista();
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
			<th>Fecha</th>
			<th>Hora</th>
			<th>Estadio</th>
			<th>Rival</th>
		</tr>
	</thead>
	<tbody>
	    <?php foreach($resultadoE as $fila){ ?>
			<tr>
				<td><?php echo $fila['id_encuentro'] ?>                 </td>
				<td><?php echo utf8_encode($fila['Nom_seleccion']) ?>   </td>
				<td><?php echo utf8_encode($fila['fecha_encuentro']) ?> </td> 
				<td><?php echo utf8_encode($fila['hora_encuentro']) ?>  </td> 
				<td><?php echo utf8_encode($fila['estadio'])?>          </td> 
				<td><?php echo utf8_encode($fila['rival'])?>            </td> 
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
	


			
             
       


			