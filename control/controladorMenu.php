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
require ('../modeloProveedor/modelo_proveedor.php');  
require ('../modeloContrato/modelo_contrato.php');  
require ('../modeloProceso/modelo_proceso.php');  
require ('../modeloServicio/modelo_servicio.php');  
require ('../modeloSeleccion/modelo_seleccion.php');  
require ('../modeloTecnico/modelo_tecnico.php');  
require ('../modeloSede/modelo_sede.php');  
require ('../modeloEncuentros/modelo_encuentros.php');  

$datos=$_POST;

switch ($_POST["accion"]) {

   // Crud para el submenu Departamentos del menu Ajustes

    case 'crear_departamento':
        $departamento=new Departamento();
        $departamento->nuevo($datos);
        break;

    case 'borrar_departamento':
		$departamento=new Departamento();
        $departamento->borrar($datos['codigo']);
        break;

    case 'actualizar_departamento':
		$departamento=new Departamento();
        $departamento->editar($datos);
        break;

         case 'consultar_departamento':
		 echo "Estas en consultar_departamento";
        break;

    // Crud para el submenu procesos del menu Empresas

     case 'crear_proceso':
         $proceso=new Proceso();
         $proceso->nuevo($datos);
    break;

    case 'borrar_proceso':
		 $proceso=new Proceso();
         $proceso->borrar($datos['id_proceso']);
        break; 

    case 'actualizar_proceso':
		 $proceso=new Proceso();
         $proceso->editar($datos);
        break;

         case 'consultar_proceso':
		 echo "Estas en consultar_proceso";
        break;


    // Crud para el submenu contratos del menu Empresa

    case 'crear_contrato':
          $contrato=new Contrato();
          $contrato->nuevo($datos);
         break;
       
    case 'borrar_contrato':
		  $contrato=new Contrato();
          $contrato->borrar($datos['num_contrato']);
        break; 

    case 'actualizar_contrato':
          $contrato=new Contrato();
          $contrato->editar($datos);
		
        break;
    case 'consultar_contrato':
		  $contrato=new Contrato();
          $contrato->lista($datos['x']);
        break;

    // Crud para submenu proveedores del menu Empresas

    case 'crear_proveedor':
          $proveedor=new Proveedor();
          $proveedor->nuevo($datos);
        break;

    case 'borrar_proveedor':
		  $proveedor=new Proveedor();
          $proveedor->borrar($datos['id_proveedor']);
        break; 

    case 'actualizar_proveedor':
		  $proveedor=new Proveedor();
          $proveedor->editar($datos);
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


     // Crud para el submenu servicio del menu Empresas

     case 'crear_servicio':
         $servicio=new Servicio();
         $servicio->nuevo($datos);
    break;

    case 'borrar_servicio':
         $servicio=new Servicio();
         $servicio->borrar($datos['id_servicio']);
        break; 

    case 'actualizar_servicio':
         $servicio=new Servicio();
         $servicio->editar($datos);
        break;

         case 'consultar_servicio':
         echo "Estas en consultar_proceso";
        break;  

//----------------------------------------------------------------------------------------------  
 //CRUD PARA MENU SELECCIONES
 
   // Crud para el submenu Selecciones del menu Seleccines

     case 'crear_seleccion':
         $servicio=new Seleccion();
         $servicio->nuevo($datos);
         break;

    case 'borrar_seleccion':
         $servicio=new Seleccion();
         $servicio->borrar($datos['id_seleccion']);
        break; 

    case 'actualizar_seleccion':
         $servicio=new Seleccion();
         $servicio->editar($datos);
        break;

    case 'consultar_seleccion':
         echo "Estas en consultar_proceso";
        break;  

    // Crud para el submenu Tecnicos del menu Selecciones      

    case 'crear_tecnico':
         $tecnico=new Tecnico();
         $tecnico->nuevo($datos);
    break;

    case 'borrar_tecnico':
         $tecnico=new Tecnico();
         $tecnico->borrar($datos['id_tecnico']);
        break; 

    case 'actualizar_tecnico':
         $tecnico=new Tecnico();
         $tecnico->editar($datos);
        break;

         case 'consultar_seleccion':
         echo "Estas en consultar_proceso";
        break;     

  // Crud para el submenu Sedes del menu Selecciones      

    case 'crear_sede':
         $sede=new Sede();
         $sede->nuevo($datos);
    break;

    case 'borrar_sede':
         $sede=new Sede();
         $sede->borrar($datos['id_sede']);
        break; 

    case 'actualizar_sede':
         $sede=new Sede();
         $sede->editar($datos);
        break;

         case 'consultar_seleccion':
         echo "Estas en consultar_proceso";
        break;            

// Crud para el submenu Encuentros del menu Selecciones      

    case 'crear_encuentro':
         $encuentro=new Encuentro();
         $encuentro->nuevo($datos);
    break;

    case 'borrar_encuentro':
         $encuentro=new Encuentro();
         $encuentro->borrar($datos['id_encuentro']);
        break; 

    case 'actualizar_encuentro':
         $encuentro=new Encuentro();
         $encuentro->editar($datos);
        break;

         case 'consultar_seleccion':
         echo "Estas en consultar_proceso";
        break;            
        
  //----------------------------------------------------------------------------------

// Opciones del controlador para el menu Ajustes
        // Crud para Roles del submenu Ajustes
    case 'crear_rol':
         $rol=new Roles();
         $rol->nuevo($datos);
        break;

    case 'borrar_rol':
         $rol = new Roles();
         $rol->borrar($_POST['id_rol']);
        break; 
 
    case 'actualiza_rol':
         $rol = new Roles();
         $rol->editar($datos);
        break;

    case 'consultar_rol':
		 echo "Estas en editar_rol";
        break;

   // Crud para submenu usuarios del menu Ajustes

         case 'crear_usuario':
       $usuario=new Usuarios();
       $usuario->nuevo($datos);
        break;
    case 'borrar_usuario':
        $usuario=new Usuarios();
        $usuario->borrar($_POST['id_usuario']);
        break; 
    case 'actualizar_usuario':
        $usuario=new Usuarios();
        $usuario->editar($datos);
        break;
    case 'consultar_usuario':
         echo "Estas en consultar_usuario";
        break;

    // Crud para Empresas del submenu Ajustes

    case 'crear_empresa':
       $empresa=new Empresa();
        $empresa->nuevo($datos);
        break;

    case 'borrar_empresa':
		$empresa=new Empresa();
        $empresa->borrar($_POST['id_empresa']);
        break; 

    case 'actualizar_empresa':
		$empresa=new Empresa();
        $empresa->editar($datos);
        break;

         case 'consultar_empresa':
		 echo "Estas en editar_empresa";
        break;

     // Crud para Ciudades del submenu Ajustes
         case 'crear_ciudad':
         $ciudad=new Ciudad();
         $ciudad->nuevo($datos);
        break;

    case 'borrar_ciudad':
		$ciudad=new Ciudad();
         $ciudad->borrar($_POST['id_ciudad']);
        break;

    case 'actualizar_ciudad':
		$ciudad=new Ciudad();
        $ciudad->editar($datos);
        break;

         case 'consultar_ciudad':
		 echo "Estas en editar_ciudad";
        break;

     // Crud para Paises del submenu Ajustes

    case 'crear_pais':
        $pais=new Pais();
        $pais->nuevo($datos);
        break;

    case 'borrar_pais':
		$pais=new Pais();
        $pais->borrar($_POST['id_pais']);
        break;

    case 'actualizar_pais':
		$pais=new Pais();
        $pais->editar($datos);
        break;

    case 'consultar_pais':
		 echo "Estas en editar_pais";
        break;

	}
	

 ?>

