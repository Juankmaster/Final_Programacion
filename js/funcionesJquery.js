function Inicio(){
	


	$(".maestras li a").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
                	$( "#listados" ).html(data);
        });
     });


	$("#listados").on("click","button.btncerrar",function(){
		$("#listados").html("");	
	})

	$("#listados").on("click","button.btncerrar2",function(){
		$( "#listados" ).load("./php/comuna/comuna2.php");	
	})



	$("#listados").on("click","a.borrar",function(){
		//Recupera datos del formulario
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	url: "./php/comuna/controladorComuna.php",
            	data: {codigo: codigo, accion:'borrar'},
            	dataType: "html"
        	})  .done(function( result ) {
        		$( "#listados" ).load("./php/comuna/comuna2.php");
        	});

		}
	});
	
	$("#listados").on("click","a.editar",function(){
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/comuna/editarComuna.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#listados").html(result);
        	});
	});
	
	$("#listados").on("click","button#actualizar",function(){
		//		var comu_codi = $("#comu_codi").attr("value");
		//		var comu_nomb = $("#comu_nomb").attr("value");
		//		var muni_codi = $("#muni_codi").attr("value");
		//		var datos = "comu_codi="+comu_codi+"&comu_nomb="+comu_nomb+"&muni_codi="+muni_codi;
		
        var datos=$("#fcomuna").serialize();
            $.ajax({
			type:"post",
			url:"./php/comuna/controladorComuna.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#listados" ).load("./php/comuna/comuna2.php");
        	});
	});
	
	$("#listados").on("click","button#nuevo",function(){
		$( "#listados" ).load("./php/comuna/nuevaComuna.php");	
	})
	
	$("#listados").on("click","button#grabar",function(){
		/*var comu_codi = $("#comu_codi").attr("value");
		var comu_nomb = $("#comu_nomb").attr("value");
		var muni_codi = $("#muni_codi").attr("value");
		var datos = "comu_codi="+comu_codi+"&comu_nomb="+comu_nomb+"&muni_codi="+muni_codi;*/
		
		var datos=$("#fcomuna").serialize();
		var vdatos=$("#fcomuna").serializeArray();
		if(vdatos[1].value==""){
			$('#validacion').modal('show')
		}

		/*$.ajax({
			type:"post",
			url:"controladorComuna.php",
			data:datos,
			dataType:"html",
			success:function(result){
				document.location.href="comuna2.php"
			}
		})*/
	});	



}