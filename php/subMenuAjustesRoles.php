 <!-- Codigo php para realizar el crud de Roles -->

 <?php 
      include '../modelo/modelo_rol.php';
 		 $rol=new Roles();
		 $listado=$rol->listado_roles();
 ?>

	
<!-- estructura del formulario para crear submenu de Paises (campos de texto botones etc)  -->
<div class="row" >
<div class="col-sm-4" >

<!-- Tablas para mostrar los roles que existen -->
 <div class="panel panel-default">
   <div class="panel-heading" style="background:#0971B3">Roles</div>
   	 <div class="table-responsive">
      <table class="table"  >
	   <tbody>
			<?php foreach($listado as $fila){ ?>
          <tr>
    <td class="editar_rol"  title="<?php echo $fila['id_rol'] ?>">&nbsp;&nbsp;<?php echo $fila['Nom_Rol'] ?></td>
    <td><a href="#" class="borrar_rol" title="<?php echo $fila['id_rol'] ?>" ><span class="glyphicon glyphicon-trash pull-right"></span></a></td>
         </tr>
            <?php } ?>
       </tbody>
     </table>
     </div>
  </div>
  </div>
<!-- Panel donde se mostrara el  formulario para editar los Roles -->
	<div class="col-sm-8">
		<div id="editar">	
		<a href="#" id="nuevo_rol"><span class="glyphicon glyphicon-plus"></span> ROL</a>
	    </div> 
	    <!--Boton para invocar el formulario  de Nuevo Rol-->
	</div>
         
</div>
		

 <script language="javascript">
	$(document).ready(Inicio);
 </script>	

	
		  
	
	
	

		
		   
		          
		     

		 



 










			
		


		  				


							

		

                
 

 
	
										
	
										
  

  		 

		
										
										
	
  
		



      
      
  
  

  		  	
   
       
       
       
      
        





			
				 


