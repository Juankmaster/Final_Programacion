<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SubmenuEmpresas</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/estilos1.css">
	<script type="text/javascript" src="js/funcionesJquery.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	 <script language="javascript">/*funcion principal de jquery*/
		$(document).ready(Inicio);
	</script>
	
</head>
<body>

<!--panel para la tabla de departamentos  -->

		<div class="panel-body" >
		<div class="row">
<!-- lista para seleccionar la empresa a la que se le asignara los departamentos  -->

	<div class="col-sm-4">
				  			
	</div>
		<!-- Estructura contenedora del formulario donde se crean los departamentos de cada empresa-->
              <div class="col-sm-8">
                  <form class="form-inline" role="form" method="post" action="control/controladorLogin.php">
            <div class="panel-group">
              <div class="panel panel-primary" >
              <div class="panel-heading">
                <h4>NUEVO DEPARTAMENTO</h4>
              </div>
                <div class="panel-body">
                <label  for="id_empresa">&nbsp; &nbsp;Codigo:</label>
                <input type="text"  name="id_empresa" class="form-control" required placeholder="Campo Requerido">

                <label  for="id_departamento">Id:</label>
                <input type="text"  name="id_departamento" class="form-control" required placeholder="Campo Requerido">

                <label  for="nombre_departamento">Nombre:</label>
                <input type="text"  name="nombre_departamento" class="form-control" required placeholder="Campo Requerido"><br>

                <input type="submit" class="btn-btn-default form-control" name="departamento" value="Guardar">
                <input type="hidden"  name="accion" value="crear_departamento"/>
              </div>
                    
                </div>
                </div>
            </div>    
          </form>   

				  		</div>
				  	</div>
				  </div>
				
</body>
</html>
   