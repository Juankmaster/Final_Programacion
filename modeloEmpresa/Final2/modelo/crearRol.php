
	
<!-- Codigo para el formulario para crear nuevos roles -->
	     
	<form id="f_a_roles" role="form" method="post">
		<div class="panel-group" >
			<div class="panel panel-primary" style="width:600px; ">
			<!-- <div class="panel-heading" style="background:#0971B3">
				Nuevo Rol
			</div> -->
				<div class="panel-body" >
				</div>
				    <div class="form-group">
				      <label  for="nom_rol">Nombre&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</label>
				      <input type="text" size="18px" name="nom_rol">
				    </div>
				    <div class="form-group">
				      <label  for="desc_rol">Descripcion &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</label>
				      <textarea value="" name="desc_rol"></textarea>
				   </div>
				     <input type="submit" class="btn btn-info " id="crear_rol" value="Crear">
				    <input type="button" class="btn btn-info cancelar " id="cancelar" value="Cancelar">
				   <!--   <button type="button" class="close" data-dismiss="modal">&times;</button> -->
					
				     <br><br>
				     <input type="hidden"  name="accion" value="crear_rol"/>
			</div>
		</div>
	</form> 

		  <!--funcion principal de jquery-->
	<script language="javascript">
	   $(document).ready(Inicio);
    </script>  

					
 	
		  

		
		 


