<!-- Codigo controlador del Menu Principal de navegacion  -->
<?php

  // Opciones del controlador para el menu Empresas
    // Crud para el submenu departamentos del menu Empresas

require ('../modelo/modelo_rol.php');
require ('../modeloUsuario/modelo_usuario.php');
require ('../modeloDepartamento/modelo_departamento.php');
require ('../modeloEmpresa/modelo_empresa.php');
require ('../modeloCiudad/modelo_ciudad.php');
require ('../modeloPais/modelo_pais.php');
require ('../modeloSucursal/modelo_sucursal.php');
require ('../modeloEmpleado/modelo_empleado.php');

$datos=$_POST;

switch ($_POST["accion"]) {

   // Crud para el submenu Departamentos del menu Ajustes

    case 'crear_departamento':
        $departamento=new Departamento();
        $departamento->nuevo_Departamento($datos);
        break;

    case 'borrar_departamento':
		$departamento=new Departamento();
        $departamento->borrar_Departamento($datos['codigo']);
        break;

    case 'actualizar_departamento':
		$departamento=new Departamento();
        $departamento->actualizar_Departamento($datos);
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

    // Crud para submenu Sucursales del menu Empresa

    case 'crear_sucursal':
       $sucursal=new Sucursal();
       $sucursal->nuevo($datos);
        break;

    case 'borrar_sucursal':
        $sucursal=new Sucursal();
       $sucursal->borrar($datos['id_sucursal']);
        break;

    case 'actualizar_sucursal':
        $sucursal=new Sucursal();
       $sucursal->editar($datos);
        break;

    case 'consultar_sucursal':
         echo "Estas en consultar_proveedores";
        break;

    // Crud para submenu Empleados del menu Empresa

    case 'crear_empleado':
       $empleado=new Empleado();
       $empleado->nuevo($datos);
        break;

    case 'borrar_empleado':
        $empleado=new Empleado();
       $empleado->borrar($datos['id_empleado']);
        break;

    case 'actualizar_empleado':
        $empleado=new Empleado();
       $empleado->editar($datos);
        break;

    case 'consultar_empleado':
         echo "Estas en consultar_empleado";
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
       $empresa=new Empresa();
        $empresa->nueva_Empresa($datos);
        break;

    case 'borrar_empresa':
		$empresa=new Empresa();
        $empresa->borrar_Empresa($_POST['id_empresa']);
        break; 

    case 'actualizar_empresa':
		$empresa=new Empresa();
        $empresa->actualizar_Empresa($datos);
        break;

         case 'consultar_empresa':
		 echo "Estas en editar_empresa";
        break;

         // Crud para Ciudades del submenu Ajustes
         case 'crear_ciudad':
         $ciudad=new Ciudad();
         $ciudad->nueva_Ciudad($datos);
        break;

    case 'borrar_ciudad':
		$ciudad=new Ciudad();
         $ciudad->borrar_Ciudad($_POST['id_ciudad']);
        break;

    case 'actualizar_ciudad':
		$ciudad=new Ciudad();
        $ciudad->actualizar_Ciudad($datos);
        break;

         case 'consultar_ciudad':
		 echo "Estas en editar_ciudad";
        break;

          // Crud para Paises del submenu Ajustes

         case 'crear_pais':
        $pais=new Pais();
        $pais->nuevo_Pais($datos);
        break;
    case 'borrar_pais':
		$pais=new Pais();
        $pais->borrar_Pais($_POST['id_pais']);
        break; 
    case 'actualizar_pais':
		$pais=new Pais();
        $pais->actualizar_Pais($datos);
        break;
    case 'consultar_pais':
		 echo "Estas en editar_pais";
        break;



	}
	

 ?>