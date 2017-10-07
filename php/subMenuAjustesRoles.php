 <!-- Codigo php para realizar el crud de Roles -->

 <?php 
      include '../modelo/modelo_rol.php';
 		 $rol=new Roles();
		 $listado=$rol->listado_roles();
 ?>

	<!DOCTYPE html>
	<html lang="es">
<head>
	<meta charset="UTF-8">
		  <title>submenuAjustesRoles</title>
		 <!--  // <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
		  <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
		 <script type="text/javascript"  src="bootstrap/js/bootstrap.min.js"></script>
		  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		  <link rel="stylesheet" type="text/css" href="bootstrap/estilos1.css">
		  <script type="text/javascript" src="bootstrap/js/funcionesJquery.js"></script>
		  <script language="javascript">
		  /*funcion principal de jquery*/

			$(document).ready(Inicio);
		  
	     </script>
	     
</head>
<body>
<!-- 
main-2
	<div class="principal-2" style="background:#D8DDEF max-height:400px;">
		subMenu de navegacion para la opcion de Ajustes

		 <div class="panel-group">
          	<div class="panel panel-primary">
            	<div class="panel-heading"  align="center">
            	</div>
            	  <div class="panel-body">
	            	<div class="row" >																												
	            		Boton del submenu Usuarios
						<div class="col-sm-2" style="padding:0px 0px 0px 0px">
							<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
								<li role="presentacion" id="usuarios"><a href="#" class="btn btn-default btn-lg ">USUARIOS</a></li>
							</ul>			
						</div>
						Boton del submenu Empresas
					<div class="col-sm-2" style="padding:0px 0px 0px 0px ">
						<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
							<li role="precentacion" id="empresas2"><a href="#" class="btn btn-default btn-lg">EMPRESAS</a></li>
						</ul>			
					</div>
					Boton del submenu Ciudades
					<div class="col-sm-2" style="padding:0px 0px 0px 0px">
						<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
							<li role="precentacion" id="ciudades"><a href="#" class="btn btn-default btn-lg">CIUDADES</a></li>
						</ul>			
					</div>
					Boton del submenu Paises
					<div class="col-sm-2" style="padding:0px 0px 0px 0px">
						<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
							<li role="presentacion" id="paises"><a href="#" class="btn btn-default btn-lg">PAISES</a></li>
						</ul>			
					</div>Boton del submenu Roles
					<div class="col-sm-2" style="padding:0px 0px 0px 0px">
						<ul class=" nav nav-tabs nav-justified navbar navbar-inverse">
							<li role="presentacion" id="roles"><a href="#" id="rol" class="btn btn-default btn-lg ">ROLES</a></li>
						</ul>			
					</div> -->

 	
		<!-- Estructura contenedora del panel del submenu Roles -->

	
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
		<a href="#" id="nuevo_rol"><span class="glyphicon glyphicon-plus"></span> ROL</a>
		<div class="editar">	
	    </div> 
	    <!--Boton para invocar el formulario  de Nuevo Rol-->
	</div>
         
</div>
		  
	
	
	

		
		   
		          
		     

		 
</body>
</html>

   


 










			
		


		  				


							

		

                
 

 
	
										
	
										
  

  		 

		
										
										
	
  
		



      
      
  
  

  		  	
   
       
       
       
      
        





			
				 


