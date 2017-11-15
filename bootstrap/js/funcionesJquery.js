
  function Inicio(){


	// funcion para los menus de navegacion de la pagina index.html
	$("#somos").click(function(){
		$(".somos").load("quiensomos.html");
		//jquery que me desplaza hacia abajo suavemente
		$("html,body").animate({ scrollTop : $(".somos").offset().top  }, 1500 );
	});
	//Menu servicios
	$("#servicios").click(function(){
		$(".somos").load("servicios.html");
		//jquery que me desplaza hacia abajo suavemente
		$("html,body").animate({ scrollTop : $(".somos").offset().top  }, 1500 );
	});

	$("#inicio").click(function() {
		document.location.href="index.html"
	})


/*------------------------------------------------------------------------------------------------------*/

// CRUD ROLES EN SUBMENU ROLES DEL MENU AJUSTES

	//Codigo para actualizar roles en  el submenu Roles del menu de Ajustes
    //Esta funcion trae el codigo del registro a actualizar y lo envia editar rol para procesar la informacion

	$(".editar_rol").click(function(evento){
		evento.preventDefault();
		var id_rol= $(this).attr("title");

	  $.ajax({
	  	    type:"post",
	  	    url:"modelo/editarRol.php",
	  	    data:'id_rol=' + id_rol,
	  	    dataType:"html",
	  	    success:function(result){
	  	    	$("#editar").html(result);
	  	   }
	
	  })
	}); 

	//Codigo para Borrar roles en  el submenu Roles del menu de Ajustes
    // Esta funcion trae el codigo de el registro a eliminar

	$(".borrar_rol").click(function(evento){
		evento.preventDefault();
		var id_rol = $(this).attr("title");
		if ( confirm("¿Realmente desea borrar el registro?")){	

			$.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:{id_rol: id_rol, accion:'borrar_rol'} ,
				dataType:"html",
				success:function(result){
				 $("#subpanel1").load("php/submenuAjustesRoles.php");
				          
				}
			})
		}
	});
				
	//Funcion para Crear  nuevos Roles en el submenu Roles en el menu Ajustes

	$("#nuevo_rol").click(function(e){
		e.preventDefault();
	  $("#editar").load("modelo/crearRol.php");

	}); 
	
 //Codigo para cancelar la accion de crear un nuevo rol en el sunmenu crear rol 

	 $(".cancelar").click(function(e){
	 	e.preventDefault();
	 	$("#subpanel1").load("php/submenuAjustesRoles.php");
		   });


/*----------------------------------------------------------------------------------------------------*/

	// CRUD USUARIOS EN SUBMENU USUARIOS DEL MENU AJUSTES

	//Codigo para actualizar Usuarios en  el submenu Usuarios del menu de Ajustes
    //Esta funcion trae el codigo del registro a actualizar y lo envia editar rol para procesar la informacion
    $(".editar_usuario").click(function(e){
    	e.preventDefault();
    	var id_usuario=$(this).attr("title");

    	$.ajax({
    		type:"post",
    		url:"modeloUsuario/editarUsuario.php",
    		data:'id_usuario=' + id_usuario,
    		dataType:"html",
    		success:function(result){
    			$("#editar").html(result);
    		}

    	})

    });
	 
	// Esta funcion cancela la edicion del formulario actualizar Rol

	$(".cerrar").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("php/submenuAjustesUsuarios.php");

	});	

	//Esta funcion trae el codigo del usuario a  borrar en el submenu usuarios del menu ajustes

	$(".borrar_usuario").click(function(evento){
		evento.preventDefault();
		var id_usuario = $(this).attr("title");
		if ( confirm("¿Realmente desea borrar el registro?")){	

			$.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:{id_usuario: id_usuario, accion:'borrar_usuario'} ,
				dataType:"html",
				success:function(result){
				 $("#subpanel1").load("php/submenuAjustesUsuarios.php");
				          
				}
			})
		}
	});

	//Funcin para llamar el formulario de nuevo Usuario en el submenu Usuarios del menu Ajustes

	$("#nuevo_usuario").click(function(e){
		e.preventDefault();
		$("#editar").load("modeloUsuario/crearUsuario.php");
	});

//---------------------------------------------------------------------------------------------------------

// CRUD DEPARTAMENTOS  DEL MENU AJUSTES
	//Codigo para actualizar Departamentos en  el submenu Departametos del menu de Ajustes
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarDepartamento para procesar la informacion

	$(".editar_departamento").click(function(e) {
		e.preventDefault();
		var id_departamento=$(this).attr("title");
		
		$.ajax({
			type:"post",
			url:"modeloDepartamento/editarDepartamento.php",
			data:'id_departamento=' + id_departamento,
			dataType:"html",
			success:function(result) {
				$("#editar").html(result);
			}
		})
				
	})

		
	$("#cerrar_depa").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("php/submenuAjustesDepartamentos.php");	
		
	});


	$(".borrar_departamento").click(function(e) {
		e.preventDefault();
		var codigo=$(this).attr("title");
		
		if(confirm("¿Realmente desea borrar el registro? ")){
		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:{codigo:codigo, accion:'borrar_departamento'},
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("php/submenuAjustesDepartamentos.php");
			}
		})

		}
	});

	$("#nuevo_departamento").click(function(e) {
		e.preventDefault();
		$("#editar").load("modeloDepartamento/crearDepartamento.php");
	});


	//---------------------------------------------------------------------------------------------------------

// CRUD   DEL MENU EMPRESAS
	//Codigo para actualizar Empresas en  el submenu Empresa del menu  Ajustes
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarEmpresa para procesar la informacion

   $(".edit_empre").click(function(e) {
     	e.preventDefault();
		var id_empresa=$(this).attr("title");
		
		$.ajax({
			type:"post",
			url:"modeloEmpresa/editarEmpresa.php",
			data:'id_empresa=' + id_empresa,
			dataType:"html",
			success:function(result) {
				$("#editar").html(result);
			}
		})
				
	});

	
	$("#cerrar_empresa").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("php/submenuAjustesEmpresas.php");	
		
	});


	$(".borrar_empresa").click(function(e) {
		e.preventDefault();
		var id_empresa=$(this).attr("title");
		
		if(confirm("¿Realmente desea borrar el registro? ")){
		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:{id_empresa:id_empresa, accion:'borrar_empresa'},
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("php/submenuAjustesEmpresas.php");
			}
		})

		}
	});


	$("#nueva_empresa").click(function  (e) {
		e.preventDefault();
		$("#editar").load("modeloEmpresa/crearEmpresa.php");
	});


// CRUD   DEL MENU CIUDADES
	//Codigo para actualizar Ciudades en  el submenu Ciudades del menu  Ajustes
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarCiudad para procesar la informacion

   $(".edit_ciudad").click(function(e) {
   	e.preventDefault();
		var id_ciudad=$(this).attr("title");
		
		$.ajax({
			type:"post",
			url:"modeloCiudad/editarCiudad.php",
			data:'id_ciudad=' + id_ciudad,
			dataType:"html",
			success:function(result) {
				$("#editar").html(result);
			}
		})
				
	});
	
	$("#cerrar_ciudad").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("php/submenuAjustesCiudades.php");	
		
	});


	$(".borrar_ciudad").click(function(e) {
		e.preventDefault();
		var id_ciudad=$(this).attr("title");
		
		if(confirm("¿Realmente desea borrar el registro? ")){
		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:{id_ciudad:id_ciudad, accion:'borrar_ciudad'},
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("php/submenuAjustesCiudades.php");
			}
		})

		}
	});


	$("#nueva_ciudad").click(function  (e) {
		e.preventDefault();
		$("#editar").load("modeloCiudad/crearCiudad.php");
	});


	// CRUD   DEL MENU PAIS
	//Codigo para actualizar Ciudades en  el submenu Pais del menu  Ajustes
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarPais para procesar la informacion

   $(".edit_pais").click(function(e) {
   	e.preventDefault();
		var id_pais=$(this).attr("title");
		
		$.ajax({
			type:"post",
			url:"modeloPais/editarPais.php",
			data:'id_pais=' + id_pais,
			dataType:"html",
			success:function(result) {
				$("#editar").html(result);
			}
		})
				
	});

	
	$("#cerrar_pais").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("php/submenuAjustesPaises.php");	
		
	});


	$(".borrar_pais").click(function(e) {
		e.preventDefault();
		var id_pais=$(this).attr("title");
		
		if(confirm("¿Realmente desea borrar el registro? ")){
		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:{id_pais:id_pais, accion:'borrar_pais'},
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("php/submenuAjustesPaises.php");
			}
		})

		}
	});


	$("#nuevo_pais").click(function  (e) {
		e.preventDefault();
		$("#editar").load("modeloPais/crearPais.php");
	});


	// CRUD   DEL MENU SUCURSALES
	//Codigo para actualizar Sucursales en  el submenu Sucursales del menu  Empresa
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarPais para procesar la informacion

   $(".edit_sucursal").click(function(e) {
   	e.preventDefault();
		var id_sucursal=$(this).attr("title");
		
		$.ajax({
			type:"post",
			url:"modeloSucursal/editarSucursal.php",
			data:'id_sucursal=' + id_sucursal,
			dataType:"html",
			success:function(result) {
				$("#editar").html(result);
			}
		})
				
	});

	
	$("#cerrar_sucursal").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("vistaEmpresa/submenuEmpresasSucursales.php");	
		
	});

	$(".borrar_sucursal").click(function(e) {
		e.preventDefault();
		var id_sucursal=$(this).attr("title");
		
		if(confirm("¿Realmente desea borrar el registro? ")){
		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:{id_sucursal:id_sucursal, accion:'borrar_sucursal'},
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("vistaEmpresa/submenuEmpresasSucursales.php");
			}
		})
		}
	});



	$("#nueva_sucursal").click(function(e) {
		e.preventDefault();
		$("#editar").load("modeloSucursal/crearSucursal.php");
	});


	// CRUD   DEL MENU EMPLEADOS
	//Codigo para actualizar Empleados en  el submenu Empleados del menu  Empresa
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarEmpleado para procesar la informacion

   $(".edit_empleado").click(function(e) {
   	e.preventDefault();
		var id_empleado=$(this).attr("title");
		
		$.ajax({
			type:"post",
			url:"modeloEmpleado/editarEmpleado.php",
			data:'id_empleado=' + id_empleado,
			dataType:"html",
			success:function(result) {
				$("#editar").html(result);
			}
		})
				
	});

	
	$("#cerrar_empleado").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("vistaEmpresa/submenuEmpresaEmpleados.php");	
		
	});


	$(".borrar_empleado").click(function(e) {
		e.preventDefault();
		var id_empleado=$(this).attr("title");
		
		if(confirm("¿Realmente desea borrar el registro? ")){
		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:{id_empleado:id_empleado, accion:'borrar_empleado'},
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("vistaEmpresa/submenuEmpresaEmpleados.php");
			}
		})

		}
	});


	$("#nuevo_empleado").click(function  (e) {
		e.preventDefault();
		$("#editar").load("modeloEmpleado/crearEmpleado.php");
	});


	// CRUD   DEL MENU PROCESOS
	//Codigo para actualizar Procesos en  el submenu Procesos del menu  Empresa
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarProceso para procesar la informacion

   $(".edit_proceso").click(function(e) {
   	e.preventDefault();
		var id_proceso=$(this).attr("title");
		
		$.ajax({
			type:"post",
			url:"modeloProceso/editarProceso.php",
			data:'id_proceso=' + id_proceso,
			dataType:"html",
			success:function(result) {
				$("#editar").html(result);
			}
		})
				
	});

	
	$("#cerrar_proceso").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("vistaEmpresa/submenuEmpresaProcesos.php");	
		
	});


	$(".borrar_proceso").click(function(e) {
		e.preventDefault();
		var id_proceso=$(this).attr("title");
		
		if(confirm("¿Realmente desea borrar el registro? ")){
		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:{id_proceso:id_proceso, accion:'borrar_proceso'},
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("vistaEmpresa/submenuEmpresaProcesos.php");
			}
		})

		}
	});


	$("#nuevo_proceso").click(function(e) {
		e.preventDefault();
		$("#editar").load("modeloProceso/crearProceso.php");
	});


	// CRUD   DEL MENU CONTRATOS
	//Codigo para actualizar Contratos en  el submenu contratos del menu  Empresa
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarContrato para procesar la informacion

   $(".edit_contrato").click(function(e) {
   	e.preventDefault();
		var num_contrato=$(this).attr("title");
		
		$.ajax({
			type:"post",
			url:"modeloContrato/editarContrato.php",
			data:'num_contrato=' + num_contrato,
			dataType:"html",
			success:function(result) {
				$("#editar").html(result);
			}
		})				
	});
	
	$("#cerrar_contrato").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("vistaEmpresa/submenuEmpresaContratos.php");		
	});


	$(".borrar_contrato").click(function(e) {
		e.preventDefault();
		var num_contrato=$(this).attr("title");
		
		if(confirm("¿Realmente desea borrar el registro? ")){
		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:{num_contrato:num_contrato, accion:'borrar_contrato'},
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("vistaEmpresa/submenuEmpresaContratos.php");
			}
		})

		}
	});


	$("#nuevo_contrato").click(function  (e) {
		e.preventDefault();
		$("#editar").load("modeloContrato/crearContrato.php");
	});


	// CRUD   DEL MENU PROVEEDOR
	//Codigo para actualizar Proveedores en  el submenu Proveedore del menu  Empresa
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarProveedor para procesar la informacion

   $(".edit_proveedor").click(function(e) {	
   e.preventDefault();			
		var id_proveedor=$(this).attr("title");
		
		$.ajax({
			type:"post",
			url:"modeloProveedor/editarProveedor.php",
			data:'id_proveedor=' + id_proveedor,
			dataType:"html",
			success:function(result) {
				$("#editar").html(result);
			}
		})
	});

		$("#cerrar_proveedor").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("vistaEmpresa/submenuEmpresaProveedores.php");	
		
	});


	$(".borrar_proveedor").click(function(e) {
		e.preventDefault();
		var id_proveedor=$(this).attr("title");
		
		if(confirm("¿Realmente desea borrar el registro? ")){
		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:{id_proveedor:id_proveedor, accion:'borrar_proveedor'},
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("vistaEmpresa/submenuEmpresaProveedores.php");
			}
		})
     	}
	});

	$("#nuevo_proveedor").click(function  (e) {
		e.preventDefault();
		$("#editar").load("modeloProveedor/crearProveedor.php");

	});


// CRUD   DEL MENU SERVICIOS
	//Codigo para actualizar Empresas en  el submenu Empresa del menu  Ajustes
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarEmpresa para procesar la informacion

   $(".edit_servicio").click(function(e) {
   	e.preventDefault();
		var id_servicio=$(this).attr("title");
		
		$.ajax({
			type:"post",
			url:"modeloServicio/editarServicio.php",
			data:'id_servicio=' + id_servicio,
			dataType:"html",
			success:function(result) {
				$("#editar").html(result);
			}
		})
				
	});

	
	$("#cerrar_servicio").click(function(e) {
		e.preventDefault();
		$("#subpanel1").html("vistaEmpresa/submenuEmpresaServicios.php");	
		
	});


	$(".borrar_servicio").click(function(e) {
		e.preventDefault();
		var id_servicio=$(this).attr("title");
		
		if(confirm("¿Realmente desea borrar el registro? ")){
		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:{id_servicio:id_servicio, accion:'borrar_servicio'},
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("vistaEmpresa/submenuEmpresaServicios.php");
			}
		})

		}
	});


	$("#nuevo_servicio").click(function(e) {
		e.preventDefault();
		$("#editar").load("modeloServicio/crearServicio.php");
	});


	// CRUD   DEL MENU SELECCIONES
	//Codigo para actualizar Selecciones en  el submenu Selecciones del menu Selecciones
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarSeleccion para procesar la informacion

   $(".edit_seleccion").click(function(e) {
   	e.preventDefault();
		var id_seleccion=$(this).attr("title");
		
		$.ajax({
			type:"post",
			url:"modeloSeleccion/editarSeleccion.php",
			data:'id_seleccion=' + id_seleccion,
			dataType:"html",
			success:function(result) {
				$("#editar").html(result);
			}
		})
				
	});

	
	$("#cerrar_seleccion").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("vistaSelecciones/submenuSeleccionesSeleccion.php");	
		
	});


	$(".borrar_seleccion").click(function(e) {
		e.preventDefault();
		var id_seleccion=$(this).attr("title");
		
		if(confirm("¿Realmente desea borrar el registro? ")){
		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:{id_seleccion:id_seleccion, accion:'borrar_seleccion'},
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("vistaSelecciones/submenuSeleccionesSeleccion.php");
			}
		})

		}
	});


	$("#nueva_seleccion").click(function(e) {
		e.preventDefault();
		$("#editar").load("modeloSeleccion/crearSeleccion.php");
	});


	// CRUD   DEL MENU TECNICOS
	//Codigo para actualizar Selecciones en  el submenu Tecnicos del menu Tecnicos
	//Esta funcion trae el codigo del registro a actualizar y lo envia crearTecnico para procesar la informacion

   $(".edit_tecnico").click(function(e) {
   	e.preventDefault();
		var id_tecnico=$(this).attr("title");
		
		$.ajax({
			type:"post",
			url:"modeloTecnico/editarTecnico.php",
			data:'id_tecnico=' + id_tecnico,
			dataType:"html",
			success:function(result) {
				$("#editar").html(result);
			}
		})
				
	});

	
	$("#cerrar_tecnico").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("vistaSelecciones/submenuSeleccionesTecnico.php");	
		
	});


	$(".borrar_tecnico").click(function(e) {
		e.preventDefault();
		var id_tecnico=$(this).attr("title");
		
		if(confirm("¿Realmente desea borrar el registro? ")){
		 $.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:{id_tecnico:id_tecnico, accion:'borrar_tecnico'},
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("vistaSelecciones/submenuSeleccionesTecnico.php");
			}
		})

		}
	});


	$("#nuevo_tecnico").click(function(e) {
		e.preventDefault();
		$("#editar").load("modeloTecnico/crearTecnico.php");
	});


	// CRUD   DEL MENU SEDES
	//Codigo para actualizar Sedes en  el submenu Sedes 
	//Esta funcion trae el codigo del registro a actualizar y lo envia crearSede para procesar la informacion

   $(".edit_sede").click(function(e) {
   	e.preventDefault();
		var id_sede=$(this).attr("title");
		
		$.ajax({
			type:"post",
			url:"modeloSede/editarSede.php",
			data:'id_sede=' + id_sede,
			dataType:"html",
			success:function(result) {
				$("#editar").html(result);
			}
		})
				
	});

	
	$("#cerrar_sede").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("vistaSelecciones/submenuSeleccionesSede.php");	
		
	});


	$(".borrar_sede").click(function(e) {
		e.preventDefault();
		var id_sede=$(this).attr("title");
		
		if(confirm("¿Realmente desea borrar el registro? ")){
		 $.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:{id_sede:id_sede,accion:'borrar_sede'},
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("vistaSelecciones/submenuSeleccionesSede.php");
			}
		})

		}
	});


	$("#nueva_sede").click(function(e) {
		e.preventDefault();
		$("#editar").load("modeloSede/crearSede.php");
	});


	// CRUD DEL MENU ENCUENTROS
	//Codigo para actualizar en  el submenu Encuentros 
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarencuentros para procesar la informacion

   $(".edit_encuentro").click(function(e) {
   	e.preventDefault();
		var id_encuentro=$(this).attr("title");
		
		$.ajax({
			type:"post",
			url:"modeloEncuentros/editarEncuentro.php",
			data:'id_encuentro=' + id_encuentro,
			dataType:"html",
			success:function(result) {
				$("#editar").html(result);
			}
		})
				
	});

	
	$("#cerrar_encuentro").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("vistaSelecciones/submenuSeleccionesEncuentros.php");	
		
	});


	$(".borrar_encuentro").click(function(e) {
		e.preventDefault();
		var id_encuentro=$(this).attr("title");
		
		if(confirm("¿Realmente desea borrar el registro? ")){
		 $.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:{id_encuentro:id_encuentro,accion:'borrar_encuentro'},
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("vistaSelecciones/submenuSeleccionesEncuentros.php");
			}
		})

		}
	});


	$("#nuevo_encuentro").click(function(e) {
		e.preventDefault();
		$("#editar").load("modeloEncuentros/crearEncuentro.php");
	});

}// Fin funcion Inicio


//-------------------------------------------------------------------------------------------------------------

// Funcion para seleccionar el formulario de editarProveedor y crearProveedor segun su tipo Natural o juridico

  function funcionTipo(){

       var x = document.getElementById("tipo").value;
         if(x == "Natural"){
         	
	  	    $("#razon_social").hide("slow");
		  	$("#apellido").show("slow");
		  	$("#rs").removeClass("required");
  
		  }else if(x == "juridica"){
		  				  		
		    $("#ape").removeClass("required");
		  	$("#razon_social").show("slow");
			$("#apellido").hide("slow");
  				  	
		  }
	}
//FUNCION PARA EL MENU DE NAVEGACION DEL MENU EMPRESA

	function menuPrincipal () {
	
	$("#empresas").click(function(e){
		e.preventDefault();
		$("#mostrar").load("vistaEmpresa/submenuEmpresas.php");
       
	});

    $("#ajustes").click(function(e){
		e.preventDefault();
		  $("#mostrar").load("php/submenuAjustes.php");
	}); 
// FUNCION PARA CERRAR SESION 

	$("#logaut").click(function(e){
		e.preventDefault();
	document.location.href="logaut.php"

	});

	$("#selecciones").click(function(e){
		e.preventDefault();
	  $("#mostrar").load("vistaSelecciones/submenuSelecciones.php");
	  /* $("#selecciones").css("background-color","#BEC2C4");*/
	   
	}); 		

	}// FIN FUNCION

//---------------------------------------------------------------------------------------------------------	
  // FUNCION DE NAVEGACION DEL MENU EMPRESA
	
	function subMenusEmpresa() {

// MENU DE NAVEGACION DEL MENU EMPRESA	

    // Funcion  que se ejecuta al oprimir el boton departamentos que muestra el submenu departamentos

	$("#servicio").click(function(e){
		e.preventDefault();
		$("#subpanel1").load("vistaEmpresa/submenuEmpresaServicios.php");
	
	});

	// Funcion  que se ejecuta al oprimir el boton procesos que muestra el submenu procesos

	$("#procesos").click(function(e){
		e.preventDefault();
		$("#subpanel1").load("vistaEmpresa/submenuEmpresaProcesos.php");

	});

	// Funcion  que se ejecuta al oprimir el boton contratos que muestra el submenu Contratos

	$("#contratos").click(function(e){
		e.preventDefault();
		$("#subpanel1").load("vistaEmpresa/submenuEmpresaContratos.php");

	});

	// Funcion  que se ejecuta al oprimir el boton proveedores que muestra el submenu proveedores

	$("#proveedores").click(function(e){
		e.preventDefault();
		$("#subpanel1").load("vistaEmpresa/submenuEmpresaProveedores.php");

	});

// Funcion  que se ejecuta al oprimir el boton sucursales que muestra el submenu Sucursales

	$("#sucursales").click(function(e){
		e.preventDefault();
		$("#subpanel1").load("vistaEmpresa/submenuEmpresasSucursales.php");

	});
		
	// Funcion  que se ejecuta al oprimir el boton empleados que muestra el submenu Empleados

	$("#empleados").click(function(e){
		e.preventDefault();
	  $("#subpanel1").load("vistaEmpresa/submenuEmpresaEmpleados.php");

	});

	$("#pempresas").click(function(e){
		e.preventDefault();
	  $("#panel1").load("modeloEmpresa/consultarEmpresa.php");
	  $("#panel").html("Empresas");

	});

	$("#pempleados").click(function(e){
		e.preventDefault();
	  $("#panel1").load("modeloEmpleado/consultarEmpleado.php");
	   $("#panel").html("Empleados");

	});

	$("#cerrar").click(function(e){
		e.preventDefault();
	  $("#panel1").html("");
	   $("#panel").html("");

	});

	$("#pcontratos").click(function(e){
		e.preventDefault();
	  $("#panel1").load("modeloContrato/consultarContrato.php");
	   $("#panel").html("Contratos");

	});

	$("#pvencer").click(function(e){
		e.preventDefault();
	  $("#panel1").load("modeloContrato/alertas.php");
	   $("#panel").html("Contratos a vencer");

	});


	$("#historial").click(function(e){
		e.preventDefault();
	  $("#panel1").load("modeloContrato/historial.php");
	   $("#panel").html("Historial contratos");

	});
				

} // FIN FUNCION

//-----------------------------------------------------------------------------------------------------------------------
   // FUNCION DE NAVEGACION DEL MENU AJUSTES
			
	function submenuAjustes() {

		$("#usuarios").click(function(e){
		e.preventDefault();
	  $("#subpanel1").load("php/submenuAjustesUsuarios.php");
	   $("#usuarios").css("background-color","#BEC2C4");
	   
	}); 						
		

	// Funcion  que se ejecuta al oprimir el boton Empresas  que muestra el submenu Empresas del menu ajustes

	$("#empresas2").click(function(evento){
		evento.preventDefault();
	  $("#subpanel1").load("php/submenuAjustesEmpresas.php");

	});

    // Funcion  que se ejecuta al oprimir el boton Departamentos que muestra el submenu departamentos del menu ajustes
	$("#departamentos").click(function(evento){
		evento.preventDefault();
	  $("#subpanel1").load("php/submenuAjustesDepartamentos.php");
	   $("#departamentos").css("background-color","#BEC2C4");
	    

	});
	    
	// Funcion  que se ejecuta al oprimir el boton Ciudaes  que muestra el submenu Ciudades del menu ajustes

	$("#ciudades").click(function(evento){
		evento.preventDefault();

	  $("#subpanel1").load("php/submenuAjustesCiudades.php");

	});

	 // Funcion  que se ejecuta al oprimir el boton Paises  que muestra el submenu Paises del menu ajustes

	$("#paises").click(function(evento){
		evento.preventDefault();
	  $("#subpanel1").load("php/submenuAjustesPaises.php");

	}); 

	 // Funcion  que se ejecuta al oprimir el boton Roles  que muestra el submenu Roles del menu ajustes

	$("#roles").click(function(evento){
		evento.preventDefault();
	  $("#subpanel1").load("php/submenuAjustesRoles.php");
	  $("#roles").css("background-color","#BEC2C4");
	  
	    
	}); 
	}// FIN FUNCION


	
  //---------------------------------------------------------------------------------------------------------	
  // FUNCION DE NAVEGACION DEL MENU SELECCIONES
	
	function submenuSelecciones() {

    // Funcion  que se ejecuta al oprimir el boton Seleccion que muestra el submenu Selecciones

	$("#seleccion").click(function(e){
		e.preventDefault();
		$("#subpanel1").load("vistaSelecciones/submenuSeleccionesSeleccion.php");
	
	});

	// Funcion  que se ejecuta al oprimir el boton procesos que muestra el submenu Selecciones

	$("#tecnico").click(function(e){
		e.preventDefault();
		$("#subpanel1").load("vistaSelecciones/submenuSeleccionesTecnico.php");

	});	

	// Funcion  que se ejecuta al oprimir el boton contratos que muestra el submenu  Selecciones

	$("#encuentros").click(function(e){
		e.preventDefault();
		$("#subpanel1").load("vistaSelecciones/submenuSeleccionesEncuentros.php");

	});

	// Funcion que ejecuta al oprimir el boton  que muestra el submenu Selecciones

	$("#sedes").click(function(e){
		e.preventDefault();
		$("#subpanel1").load("vistaSelecciones/submenuSeleccionesSede.php");

	});

	$("#pselecciones").click(function(e){
		e.preventDefault();
	  $("#panel1").load("modeloSeleccion/consultarSeleccion.php");
	  $("#panel").html("Selecciones");

	});

	$("#ptecnicos").click(function(e){
		e.preventDefault();
	  $("#panel1").load("modeloTecnico/consultarTecnico.php");
	   $("#panel").html("Tecnicos");

	});

	$("#cerrar").click(function(e){
		e.preventDefault();
	  $("#panel1").html("");
	   $("#panel").html("");

	});

	$("#pencuentros").click(function(e){
		e.preventDefault();
	  $("#panel1").load("modeloEncuentros/consultarEncuentro.php");
	   $("#panel").html("Encuentros");

	});



	

} // FIN FUNCION