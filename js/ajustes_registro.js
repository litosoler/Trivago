
$("#btn_guardar_ajustes").click(function(){ 	
	if ($("#nombre").val()!='' && $("#apelido").val()!=''&& $("#codigo-postal").val()!='' && $("#seleccionar-ciudad").val()!='' && $("#genero").val()!=''
	  && $("#direccion").val()!='' && $("#correo").val()!='' && $("#contra").val()!='') {		
	 $.ajax({
	 url:"../class/registro-ajustes-procesar.php",
	 data: 'genero=' + $("#genero").val() + '&ciudad=' + $("#seleccionar-ciudad").val() + '&postal=' + $("#codigo-postal").val() + '&nombre=' + $("#nombre").val() +
	 '&apellido=' + $("#apelido").val() + '&correo=' + $("#correo").val() + '&contrasenia=' + $("#pwd").val() + '&direccion=' + $("#direccion").val(),
	 method: "GET",
	 dataType:"json",
	 success: function(data){
		 if (data.exito==1) {
			 alert(data.mensaje);
			 window.location = "../paginasweb/pagina_inicio.html";
		 }else{ 
			alert("algo esta mal");
		 }
	   },
    });
	}else{
	 alert("Falta completar al menos uno de los campos");
	};


});




//'nombre=' + $("#nombre").val() +
//'nombre=' + $("#nombre").val() +