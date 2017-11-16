
$(document).ready(function(){
	$("#btn_guardar_ajustes").click(function(){ 	
		 //alert($("#nombre").val() + $("#apellido").val()+$("#codigo-postal").val()+$("#seleccionar-ciudad").val()+$("#genero").val()+$("#direccion").val());
		if ($("#nombre").val()!='' && $("#apellido").val()!=''&& $("#codigo-postal").val()!='' && $("#seleccionar-ciudad").val()!='' && $("#genero").val()!=''
		  && $("#direccion").val()!='') {		
		 $.ajax({
		 url:"../class/registro-ajustes-procesar.php",
		 data: 'genero=' + $("#genero").val() + '&ciudad=' + $("#seleccionar-ciudad").val() + '&postal=' + $("#codigo-postal").val() + '&nombre=' + $("#nombre").val() +
		 '&apellido=' + $("#apellido").val() +'&direccion=' + $("#direccion").val(),
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
});




//'nombre=' + $("#nombre").val() +
//'nombre=' + $("#nombre").val() +