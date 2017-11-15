<?php

	include '../modeloEmpleado/modelo_empleado.php';
		 $empleado=new Empleado();
	     $resultadoE= $empleado->lista();
?>

<!-- <div class="box-header" style="background:#0971B3"><span>CONSULTA EMPLEADOS</span>
    <i class="ion ion-clipboard"></i>
    tools box
       <div class="pull-right box-tools">       
       </div>/. tools
       </div><br>/.box-header -->

<div class="box-body">
             
<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0"
       width="100%">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Celular</th>
			<th>Email</th>
			<th>Direccion</th>
			<th>Cargo</th>
			<th>Sucursal</th>
		</tr>
	</thead>
	<tbody>
	    <?php foreach($resultadoE as $fila){ ?>
			<tr>
				<td><?php echo $fila['id_empleado'] ?> </td>
				<td><?php echo utf8_encode($fila['Nom_empleado']) ?> </td>
				<td><?php echo utf8_encode($fila['Ape_empleado']) ?> </td> 
				<td><?php echo utf8_encode($fila['Cel_empleado']) ?> </td> 
				<td><?php echo utf8_encode($fila['Email_empleado'])?> </td> 
				<td><?php echo utf8_encode($fila['Dir_empleado']) ?> </td> 
				<td><?php echo utf8_encode($fila['Nom_cargo']) ?> </td> 
				<td><?php echo utf8_encode($fila['Nom_sucursal']) ?> </td> 
			</tr>
	    <?php } ?>
	</tbody>
</table>
</div>
<!-- Funciones javascript para logica  -->

<script>
	$(document).ready(Inicio); 	  
   $(document).ready(function() { $('#tabla').DataTable( { dom: 'Bfrtip', buttons: [ 'copy', 'csv', 'excel', 'pdf', 'print' ] } ); } );  
</script>
				
				
