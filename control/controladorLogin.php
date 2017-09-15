
<!-- Codigo php que controla el formulario login  -->
<?php

	$datos=$_POST;
	/*$nom_usuario=$_POST["usuario"];
	$password=$_POST["clave"];
	$accion=$_POST["accion"];*/

	switch ($_POST['accion']){

		// Opcion login
    case 'consultar_login':
       echo "Estas en LOGIN";
    echo "<script>location.href='../menuPrincipal.php'</script>";
        break;

    // Opciones del controlador para el menu Empresas
    // Crud para el submenu departamentos del menu Empresas
    case 'crear_departamento':
        echo "Estas en crear_departamento";
        break;
    case 'borrar_departamento':
		 echo "Estas en borrar_departamento";
        break; 
    case 'editar_departamento':
		 echo "Estas en editar_departamento";
        break;
         case 'consultar_departamento':
		 echo "Estas en consultar_departamento";
        break;

        // Crud para el submenu procesos del menu Empresas
         case 'crear_proceso':
        echo "Estas en crear_proceso";
        break;
    case 'borrar_proceso':
		 echo "Estas en borrar_proceso";
        break; 
    case 'editar_proceso':
		 echo "Estas en editar_proceso";
        break;
         case 'consultar_proceso':
		 echo "Estas en consultar_proceso";
        break;

         // Crud para el submenu contratos del menu Empresas
         case 'crear_contrato':
        echo "Estas en crear_contrato";
        break;
    case 'borrarcontrato':
		 echo "Estas en borrar_contrato";
        break; 
    case 'editar_contrato':
		 echo "Estas en editar_contrato";
        break;
         case 'consultar_contrato':
		 echo "Estas en consultar_contrato";
        break;

          // Crud para submenu proveedores del menu Empresas
         case 'crear_proveedores':
        echo "Estas en crear_proveedores";
        break;
    case 'borrar_proveedores':
		 echo "Estas en borrar_proveedores";
        break; 
    case 'editar_proveedores':
		 echo "Estas en editar_proveedores";
        break;
    case 'consultar_proveedores':
		 echo "Estas en consultar_proveedores";
        break;

  //----------------------------------------------------------------------------------
// Opciones del controlador para el menu Ajustes
        // Crud para Roles del submenu Ajustes
    case 'crear_rol':
        echo "Estas en crear_rol";
        break;
    case 'borrar_rol':
		 echo "Estas en borrar_rol";
        break; 
    case 'editar_rol':
		 echo "Estas en editar_rol";
        break;
         case 'consultar_rol':
		 echo "Estas en editar_rol";
        break;

        // Crud para Empresas del submenu Ajustes
         case 'crear_empresa':
        echo "Estas en crear_empresa";
        break;
    case 'borrar_empresa':
		 echo "Estas en borrar_empresa";
        break; 
    case 'editar_empresa':
		 echo "Estas en editar_empresa";
        break;
         case 'consultar_empresa':
		 echo "Estas en editar_empresa";
        break;

         // Crud para Ciudades del submenu Ajustes
         case 'crear_ciudad':
        echo "Estas en crear_ciudad";
        break;
    case 'borrar_ciuda':
		 echo "Estas en borrar_ciudad";
        break; 
    case 'editar_ciudad':
		 echo "Estas en editar_ciudad";
        break;
         case 'consultar_ciudad':
		 echo "Estas en editar_ciudad";
        break;

          // Crud para Paises del submenu Ajustes
         case 'crear_pais':
        echo "Estas en crear_pais";
        break;
    case 'borrar_pais':
		 echo "Estas en borrar_pais";
        break; 
    case 'editar_pais':
		 echo "Estas en editar_pais";
        break;
    case 'consultar_pais':
		 echo "Estas en editar_pais";
        break;


}
	
	/*echo $nom_usuario.$password.$accion;

	if ($nom_usuario=="juan" && $password=="LOGIN") {
		 
    url:('../menuPrincipal.php');
	echo "Usuario Valido";
	}else
	{
		echo "Usuario no Valido";
	}*/
	

 ?>
 
