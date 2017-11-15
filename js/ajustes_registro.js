
$("#btn_guardar_ajustes").click(function(){ 	
	if ($("#nombre").val()!='' && $("#apelido").val()!=''&& $("#codigo-postal").val()!='' && $(".form-control").val()!='' && $("#genero").val()!='' && $("#direccion").val()!='') {		
	 $.ajax({
	 url:"../class/registro_ajustes_procesar.php",
	 data: 'genero=' + $("#genero").val() + '&ciudad=' + $("#seleccionar-ciudad").val() + '&postal=' + $("#codigo-postal").val() + '&nombre=' + $("#nombre").val() +
	 '&apellido=' + $("#apelido").val() + '&correo=' + $("#correo").val() + '&contrasenia=' + $("#contra").val() + '&direccion=' + $("#direccion").val(),
	 method: "GET",
	 dataType:"json",
	 success: function(data){
		 if (data.exito==1) {
			 alert(data.mensaje);
			 window.location = "../paginasweb/pagina_inicio.html";
		 }else{ 
			alert(data.mensaje);
		 }
	   },
    });
	}else{
	 alert("Falta completar al menos uno de los campos");
	};


});



//si es un id #
// si es una class .
//'nombre=' + $("#nombre").val() +
//'nombre=' + $("#nombre").val() +