<!-- Codigo controlador del Menu Principal de navegacion  -->
<?php

  // Opciones del controlador para el menu Empresas
    // Crud para el submenu departamentos del menu Empresas

require ('../modelo/modelo_rol.php');
require ('../modeloUsuario/modelo_usuario.php');

$datos=$_POST;

switch ($_POST["accion"]) {
  
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
       $rol=new Roles();
       $rol->nuevo_Rol($datos);
        break;

    case 'borrar_rol':
       $rol = new Roles();
    $rol->borrar_Rol($_POST['id_rol']);

        break; 

    case 'actualiza_rol':
     $rol = new Roles();
    $rol->actualizar_Rol($datos);
        break;

         case 'consultar_rol':
		 echo "Estas en editar_rol";
        break;


         // Crud para submenu usuarios del menu Ajustes

         case 'crear_usuario':
       $usuario=new Usuarios();
       $usuario->nuevo_Usuario($datos);
        break;
    case 'borrar_usuario':
        $usuario=new Usuarios();
        $usuario->borrar_Usuario($_POST['id_usuario']);
        break; 
    case 'actualizar_usuario':
        $usuario=new Usuarios();
        $usuario->actualizar_Usuario($datos);
        break;
    case 'consultar_usuario':
         echo "Estas en consultar_usuario";
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
	

 ?>