$("#btn_guardar_ajustes").click(function(){ 	
	if ($("#nombre").val() && $("#apelido").val()) {		
	$.ajax({
	 url:"../class/registro-ajustes-procesar.php",
	 data: 'nombre=' + $("#nombre").val() + '&apellido=' + $("#apelido").val(),
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
	}
});