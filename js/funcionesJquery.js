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

	// Funcion  que se ejecuta al oprimir el boton Ajustes que muestra el submenu Roles

	$("#ajustes").click(function(){
	  $("#mostrar").load("php/submenuAjustes.php");

	}); 
	// Funcion  que se ejecuta al oprimir el boton Roles que muestra el submenu Roles del menu ajustes

	$("#roles").click(function(){
	  $("#mostrar").load("php/submenuAjustes.php");

	}); 

	// Funcion  que se ejecuta al oprimir el boton Empresas  que muestra el submenu Empresas del menu ajustes

	$("#empresas2").click(function(){
	  $("#subpanel1").load("php/submenuAjustesEmpresas.php");

	});

// Funcion  que se ejecuta al oprimir el boton Ciudaes  que muestra el submenu Ciudades del menu ajustes

	$("#ciudades").click(function(){
	  $("#subpanel1").load("php/submenuAjustesCiudades.php");

	});

	 // Funcion  que se ejecuta al oprimir el boton Paises  que muestra el submenu Paises del menu ajustes

	$("#paises").click(function(){
	  $("#subpanel1").load("php/submenuAjustesPaises.php");

	}); 

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
	// 	var datos = "comu_codi="+comu_codi+"&comu_nomb="+comu_nomb+"&muni_codi="+muni_codi;*/
		
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



}