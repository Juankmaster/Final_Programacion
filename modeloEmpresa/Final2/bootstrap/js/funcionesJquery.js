
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

//------------------------------------------------------------------------------------------
	// Menu de navegacion del menu empresas

// Funcion que se ejecuta al oprimir el boton Empresas me muestra el submenu de empresas

	$("#empresas").click(function(){
		$("#mostrar").load("php/submenuEmpresas.php");

	});

	// Funcion  que se ejecuta al oprimir el boton departamentos que muestra el submenu departamentos

	$("#departamentos").click(function(){
		$("#subpanel").load("php/submenuDepartamentos.php");

	});

	// Funcion  que se ejecuta al oprimir el boton procesos que muestra el submenu procesos

	$("#procesos").click(function(){
		$("#subpanel1").load("php/submenuProcesos.php");

	});

	// Funcion  que se ejecuta al oprimir el boton contratos que muestra el submenu Contratos

	$("#contratos").click(function(){
		$("#subpanel1").load("php/submenuContratos.php");

	});

	// Funcion  que se ejecuta al oprimir el boton proveedores que muestra el submenu proveedores

	$("#proveedores").click(function(){
		$("#subpanel1").load("php/submenuProveedores.php");

	});

// Funcion  que se ejecuta al oprimir el boton sucursales que muestra el submenu Sucursales

	$("#sucursales").click(function(){
		$("#subpanel1").load("php/submenuSucursales.php");

	});

	// Funcion  que se ejecuta al oprimir el boton empleados que muestra el submenu Empleados

	$("#empleados").click(function(){
	  $("#subpanel1").load("php/submenuEmpleados.php");

	});

// ------------------------------------------------------------------------------------------------
	// Menu de navegacion del menu Ajustes

// Funcion  que se ejecuta al oprimir el boton Ajustes que muestra el submenu Usuarios

	$("#ajustes").click(function(){
		  $("#mostrar").load("php/submenuAjustes.php");
	});

	$("#usuarios").click(function(){
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

	//Esta funcion llama al controlador y envia los datos del formulario para Actualizar los Roles del submenu Roles en el menu Ajustes

	$("#actualizar_rol").click(function(evento){
        evento.preventDefault();
		var datos= $("#f_a_roles").serialize();

	  $.ajax({
	  	    type:"post",
	  	    url:"control/controladorMenu.php",
	  	    data:datos,
	  	    dataType:"html",
	  	   success:function(result){
	  	    $("#editar").html("");
	  	    $("#subpanel1").load("php/submenuAjustesRoles.php");

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

	$("#nuevo_rol").click(function(){
	  $("#editar").load("modelo/crearRol.php");

	});
	//Funcion que gestiona los datos del formulario de nuevo Rol

      $("#crear_rol").click(function(evento){
      	evento.preventDefault();
	var datos= $("#f_a_roles").serialize();

		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:datos,
			dataType:"html",
			success:function(result){
	  	       $("#subpanel1").load("php/submenuAjustesRoles.php");

			}
		})
     });
 //Codigo para cancelar la accion de crear un nuevo rol en el sunmenu crear rol

	 $(".cancelar").click(function(){
	 	$("#subpanel1").load("php/submenuAjustesRoles.php");
		   });


/*----------------------------------------------------------------------------------------------------*/

			// CRUD USUARIOS EN SUBMENU USUARIOS DEL MENU AJUSTES

	//Codigo para actualizar Usuarios en  el submenu Usuarios del menu de Ajustes
    //Esta funcion trae el codigo del registro a actualizar y lo envia editar rol para procesar la informacion
    $(".editar_usuario").click(function(){
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

	//Esta funcion llama al controlador y envia los datos del formulario para Actualizar los usuarios del submenu Usuariosen el menu Ajustes

	$("#actualizar_usuario").click(function(evento){
        evento.preventDefault();
		var datos= $("#fusuarios").serialize();

	  $.ajax({
	  	    type:"post",
	  	    url:"control/controladorMenu.php",
	  	    data:datos,
	  	    dataType:"html",
	  	   success:function(result){
	  	     $("#subpanel1").load("php/submenuAjustesUsuarios.php");

	  	   }
	  })
	});

	// Esta funcion cancela la edicion del formulario actualizar Rol

	$(".cerrar").click(function() {
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

	$("#nuevo_usuario").click(function(){
		$("#editar").load("modeloUsuario/crearUsuario.php");
	})

    //Funcion ajax para procesar y crear un nuevo Usuario

    $("#crear_usuario").click(function(){
    	var datos=$("#fnusuarios").serialize();

    	$.ajax({
    		type:"post",
    		url:"control/controladorMenu.php",
    		data:datos,
    		dataType:"html",
    		success:function(result){
             $("#subpanel1").load("php/submenuAjustesUsuarios.php");

    		}
    	})
    });
//---------------------------------------------------------------------------------------------------------

// CRUD DEPARTAMENTOS  DEL MENU AJUSTES
	//Codigo para actualizar Departamentos en  el submenu Departametos del menu de Ajustes
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarDepartamento para procesar la informacion

	$(".editar_departamento").click(function() {
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

	$("#actua_depa").click(function(e) {
		e.preventDefault();
		var datos=$("#fdepartamentos").serialize();

		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:datos,
			dataType:"html"
			}) .done(function(result) {
        		$("#subpanel1").load("php/submenuAjustesDepartamentos.php");
        	});

		});


	$("#cerrar_depa").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("php/submenuAjustesDepartamentos.php");

	});


	$(".borrar_departamento").click(function() {
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

// codigo que trae el formulario de crear nuevo departamento
	$("#nuevo_departamento").click(function  () {
		$("#editar").load("modeloDepartamento/crearDepartamento.php");
	});


	$("#crea_depar").click(function (e) {
		e.preventDefault();
		var datos=$("#fndepartamento").serialize();

		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:datos,
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("php/submenuAjustesDepartamentos.php");
			}
		})

	});


	//---------------------------------------------------------------------------------------------------------

// CRUD   DEL MENU EMPRESAS
	//Codigo para actualizar Empresas en  el submenu Empresa del menu  Ajustes
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarEmpresa para procesar la informacion

   $(".edit_empre").click(function() {
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

	$("#actua_empresa").click(function(e) {
		e.preventDefault();
		var datos=$("#fempresa").serialize();

		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:datos,
			dataType:"html"
			}) .done(function(result) {
        		$("#subpanel1").load("php/submenuAjustesEmpresas.php");
        	});

		});


	$("#cerrar_empresa").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("php/submenuAjustesEmpresas.php");

	});


	$(".borrar_empresa").click(function() {
		var id_empresa=$(this).attr("title");

		if(confirm("¿Realmente desea borrar el registro1? ")){
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

/* CREAR EMPRESA ANTIGUO MODELO*/
  $("#nueva_empresa").click(function  () {
    $("#editar").load("modeloEmpresa/crearEmpresa.php");

  });

	$("#crea_empresa").click(function (e) {
		e.preventDefault();
		var datos=$("#fnempresa").serialize();

		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:datos,
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("php/submenuAjustesEmpresas.php");
			}
		})
	});

// CRUD   DEL MENU CIUDADES
	//Codigo para actualizar Ciudades en  el submenu Ciudades del menu  Ajustes
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarCiudad para procesar la informacion

   $(".edit_ciudad").click(function() {
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

	$("#actua_ciudad").click(function(e) {
		e.preventDefault();
		var datos=$("#fciudad").serialize();

		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:datos,
			dataType:"html"
			}) .done(function(result) {
        		$("#subpanel1").load("php/submenuAjustesCiudades.php");
        	});

		});


	$("#cerrar_ciudad").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("php/submenuAjustesCiudades.php");

	});


	$(".borrar_ciudad").click(function() {
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


	$("#nueva_ciudad").click(function  () {
		$("#editar").load("modeloCiudad/crearCiudad.php");
	});


	$("#crea_ciudad").click(function (e) {
		e.preventDefault();
		var datos=$("#fnciudad").serialize();

		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:datos,
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("php/submenuAjustesCiudades.php");
			}
		})

	});


	// CRUD   DEL MENU PAIS
	//Codigo para actualizar Ciudades en  el submenu Pais del menu  Ajustes
	//Esta funcion trae el codigo del registro a actualizar y lo envia editarPais para procesar la informacion

   $(".edit_pais").click(function() {
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

	$("#actua_pais").click(function(e) {
		e.preventDefault();
		var datos=$("#fpais").serialize();

		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:datos,
			dataType:"html"
			}) .done(function(result) {
        		$("#subpanel1").load("php/submenuAjustesPaises.php");
        	});

		});


	$("#cerrar_pais").click(function(e) {
		e.preventDefault();
		$("#subpanel1").load("php/submenuAjustesPaises.php");

	});


	$(".borrar_pais").click(function() {
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


	$("#nuevo_pais").click(function  () {
		$("#editar").load("modeloPais/crearPais.php");
	});


	$("#crea_pais").click(function (e) {
		e.preventDefault();
		var datos=$("#fnpais").serialize();

		$.ajax({
			type:"post",
			url:"control/controladorMenu.php",
			data:datos,
			dataType:"html",
			success:function  (result) {
				$("#subpanel1").load("php/submenuAjustesPaises.php");
			}
		})

	});

  // CRUD   DEL MENU PROCESOS
  	//Codigo para actualizar PROCESOS en  el submenu EMPRESAS del menu  EMPRESAS
  	//Esta funcion trae el codigo del registro a actualizar y lo envia editarpROCESOS para procesar la informacion

    /* CREAR PROCESOS ANTIGUO MODELO*/
      $("#nuevo_proceso").click(function  () {
        $("#editar").load("modeloProcesos/crearProcesos.php");

      });

    	$("#crea_proceso").click(function (e) {
    		e.preventDefault();
    		var datos=$("#fnprocesos").serialize();

    		$.ajax({
    			type:"post",
    			url:"control/controladorMenu.php",
    			data:datos,
    			dataType:"html",
    			success:function  (result) {
    				$("#subpanel1").load("php/submenuProcesos.php");
    			}
    		})
    	});

      /* EDITAR PROCESOS ANTIGUO MODELO*/
      $(".edit_proc").click(function() {
       var id_proc=$(this).attr("title");

       $.ajax({
         type:"post",
         url:"modeloProcesos/editarProcesos.php",
         data:'id_proc=' + id_proc,
         dataType:"html",
         success:function(result) {
           $("#editar").html(result);
         }
       })

     });

     /* ACTUALIZAR PROCESOS ANTIGUO MODELO*/
     $("#actua_proc").click(function(e) {
       e.preventDefault();
       var datos=$("#fnprocesos").serialize();

       $.ajax({
         type:"post",
         url:"control/controladorMenu.php",
         data:datos,
         dataType:"html"
         }) .done(function(result) {
               $("#subpanel1").load("php/submenuProcesos.php");
             });
       });

       /* CERRAR FORMULARIO DE PROCESOS ANTIGUO MODELO*/
     $("#cerrar_proceso").click(function(e) {
       e.preventDefault();
       $("#subpanel1").load("php/submenuProcesos.php");
     });

     /* BORRAR PROCESOS ANTIGUO MODELO*/
     $(".borrar_proceso").click(function() {
       var id_proc=$(this).attr("title");

       if(confirm("¿Realmente desea borrar el registro-1? ")){
       $.ajax({
         type:"post",
         url:"control/controladorMenu.php",
         data:{id_proc:id_proc, accion:'borrar_proceso'},
         dataType:"html",
         success:function  (result) {
           $("#subpanel1").load("php/submenuProcesos.php");
         }
       })

       }
     });

}





























// ------------------------------------------------------------------------------------------------
	// Menu de navegacion del menu ????






	// $(".maestras li a").click(function(e){
 //     	e.preventDefault();
 //        url = $(this).attr("href");

 //        $.post( url, function(data) {
 //        		if(url!="#")
 //                	$( "#listados" ).html(data);
 //        });
 //     });


	// $("#listados").on("click","button.btncerrar",function(){
	// 	$("#listados").html("");
	// })

	// $("#listados").on("click","button.btncerrar2",function(){
	// 	$( "#listados" ).load("./php/comuna/comuna2.php");
	// })



	// $("#listados").on("click","a.borrar",function(){
	// 	//Recupera datos del formulario
	// 	var codigo = $(this).attr("codigo");
	// 	if ( confirm("¿Realmente desea borrar el registro?")){
	// 		$.ajax({
 //        		method: "post",
 //            	url: "./php/comuna/controladorComuna.php",
 //            	data: {codigo: codigo, accion:'borrar'},
 //            	dataType: "html"
 //        	})  .done(function( result ) {
 //        		$( "#listados" ).load("./php/comuna/comuna2.php");
 //        	});

	// 	}
	// });

	// $("#listados").on("click","a.editar",function(){
	// 	//Recupera datos del fromulario
	// 	var codigo = $(this).attr("codigo");
	// 	$.ajax({
	// 		type:"post",
	// 		url:"./php/comuna/editarComuna.php",
	// 		data:"codigo=" + codigo,
	// 		dataType:"html"
 //        	}) .done(function( result ) {
 //        		$("#listados").html(result);
 //        	});
	// });

	// $("#listados").on("click","button#actualizar",function(){
	// 	//		var comu_codi = $("#comu_codi").attr("value");
	// 	//		var comu_nomb = $("#comu_nomb").attr("value");
	// 	//		var muni_codi = $("#muni_codi").attr("value");
	// 	//		var datos = "comu_codi="+comu_codi+"&comu_nomb="+comu_nomb+"&muni_codi="+muni_codi;

 //        var datos=$("#fcomuna").serialize();
 //            $.ajax({
	// 		type:"post",
	// 		url:"./php/comuna/controladorComuna.php",
	// 		data: datos,
	// 		dataType:"html"
 //        	}) .done(function( result ) {
 //        		$( "#listados" ).load("./php/comuna/comuna2.php");
 //        	});
	// });

	// $("#listados").on("click","button#nuevo",function(){
	// 	$( "#listados" ).load("./php/comuna/nuevaComuna.php");
	// })

	// $("#listados").on("click","button#grabar",function(){
	// 	/*var comu_codi = $("#comu_codi").attr("value");
	// 	var comu_nomb = $("#comu_nomb").attr("value");
	// 	var muni_codi = $("#muni_codi").attr("value");
	// 	var datos = "comu_codi="+comu_codi+"&comu_nomb="+comu_nomb+"&muni_codi="+muni_codi;

	// 	var datos=$("#fcomuna").serialize();
	// 	var vdatos=$("#fcomuna").serializeArray();
	// 	if(vdatos[1].value==""){
	// 		$('#validacion').modal('show')
	// 	}

		/*$.ajax({
			type:"post",
			url:"controladorComuna.php",
			data:datos,
			dataType:"html",
			success:function(result){
				document.location.href="comuna2.php"
			}
		})*/
	// });
