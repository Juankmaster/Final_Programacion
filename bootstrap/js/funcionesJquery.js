
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
		$("#subpanel").load("php/submenuProcesos.php");

	});

	// Funcion  que se ejecuta al oprimir el boton contratos que muestra el submenu Contratos

	$("#contratos").click(function(){
		$("#subpanel").load("php/submenuContratos.php");

	});

	// Funcion  que se ejecuta al oprimir el boton proveedores que muestra el submenu proveedores

	$("#proveedores").click(function(){
		$("#subpanel").load("php/submenuProveedores.php");

	});

// Funcion  que se ejecuta al oprimir el boton sucursales que muestra el submenu Sucursales

	$("#sucursales").click(function(){
		$("#subpanel").load("php/submenuSucursales.php");

	});
		
	// Funcion  que se ejecuta al oprimir el boton empleados que muestra el submenu Empleados

	$("#empleados").click(function(){
	  $("#subpanel").load("php/submenuEmpleados.php");

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
	    $("#rol").css("background-color","");

	}); 						
		

	// Funcion  que se ejecuta al oprimir el boton Empresas  que muestra el submenu Empresas del menu ajustes

	$("#empresas2").click(function(evento){
		evento.preventDefault();
	  $("#mostrar").load("php/submenuAjustesEmpresas.php");

	});

	 


// Funcion  que se ejecuta al oprimir el boton Ciudaes  que muestra el submenu Ciudades del menu ajustes

	$("#ciudades").click(function(evento){
		evento.preventDefault();
	  $("#mostrar").load("php/submenuAjustesCiudades.php");

	});

	 // Funcion  que se ejecuta al oprimir el boton Paises  que muestra el submenu Paises del menu ajustes

	$("#paises").click(function(evento){
		evento.preventDefault();
	  $("#mostrar").load("php/submenuAjustesPaises.php");

	}); 

	 // Funcion  que se ejecuta al oprimir el boton Roles  que muestra el submenu Roles del menu ajustes

	$("#roles").click(function(evento){
		evento.preventDefault();
	  $("#subpanel1").load("php/submenuAjustesRoles.php");
	  $("#rol").css("background-color","#BEC2C4");
	    
	}); 
	
	

/*------------------------------------------------------------------------------------------------------*/
							// CRUD ROLES EN SUBMENU ROLES DEL MENU AJUSTES

	//Codigo para actualizar roles en  el submenu Roles del menu de Ajustes
    //Esta funcion trae el codigo del registro a actualizar y lo envia editar rol para procesar la informacion

	$(".editar_rol").click(function(evento){
		/*evento.preventDefault();*/
		var id_rol= $(this).attr("title");
	  $.ajax({
	  	    type:"post",
	  	    url:"modelo/editarRol.php",
	  	    data:'id_rol=' + id_rol,
	  	    dataType:"html",
	  	    success:function(result){
	  	    	$(".editar").html(result);
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
	  	    $(".editar").html("");
	  	    $("#subpanel1").load("php/submenuAjustesRoles.php");

	  	   }
	  })
	}); 

	//Codigo para Borrar roles en  el submenu Roles del menu de Ajustes
    // Esta funcion trae el codigo de el registro a eliminar

	$(".borrar_rol").click(function(evento){
		evento.preventDefault();
		//Recupera datos del fromulario
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
	  $(".editar").load("modelo/crearRol.php");

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
				$(".editar").html("");
	  	        $("#subpanel1").load("");

			}
		})
     });
 //Codigo para cancelar la accion de crear un nuevo rol en el sunmenu crear rol 

	 $("#cancelar").click(function(){
	 	$(".editar").html("");
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
			data:'id_usuario='+ id_usuario,
			dataType:"html",
			success:function(result){
				$(".editar").html(result);
				
			}
		})
	});

	//Esta funcion llama al controlador y envia los datos del formulario para Actualizar los usuarios del submenu Usuariosen el menu Ajustes

	$("#actualizar_usuario").click(function(evento){
        evento.preventDefault();
		var datos= $("#f_a_usuarios").serialize();
	  $.ajax({
	  	    type:"post",
	  	    url:"control/controladorMenu.php",
	  	    data:datos,
	  	    dataType:"html",
	  	   success:function(result){
	  	    $(".editar").html("");
	  	     $("#subpanel1").load("php/submenuAjustesUsuarios.php");
	  	   /* $(".editar").load("php/submenuAjustes.php");*/

	  	   }
	  })
	}); 
		

	//Esta funcion trae el codigo del usuario a  borrar en el submenu usuarios del menu ajustes

	$(".borrar_usuario").click(function(evento){
		evento.preventDefault();
		//Recupera datos del fromulario
		var id_usuario = $(this).attr("title");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
				type:"post",
				url:"control/controladorMenu.php",
				data:{id_usuario: id_usuario, accion:'borrar_usuario'} ,
				dataType:"html",
				success:function(result){
				 $(".editar").load("php/submenuAjustesUsuarios.php");
				          
				}
			})
		}
	});

	//Funcin para llamar el formulario de nuevo Usuario en el submenu Usuarios del menu Ajustes

	$("#nuevo_usuario").click(function(){
		alert("hola");
		$(".editar").load("modeloUsuario/crearUsuario.php");
	});

    //Funcion ajax para procesar y crear un nuevo Usuario

    $("#crear_usuario").click(function(){

    	var datos=("#f_n_usuario").serialize();
    	alert(datos);
    	$.ajax({
    		type:"post",
    		url:"control/controladorMenu.php",
    		data:datos,
    		dataType:"html",
    		success:function(result){
             $(".editar").html("");
             /*$("#subpanel1").load("submenuAjustesUsuarios.php");*/

    		}
    	})
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


		

		



	  	    
	  	  
	


 

	










	  	









