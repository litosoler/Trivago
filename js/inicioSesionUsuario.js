$(document).ready(function(){
   $("#btn-iniciar-sesion").click(function(){ 	
   	if ($("#pwd").val()!="" && $("#correo").val()!="" ) {		
   		$.ajax({
		url:"../procesamiento/proceso_inicio_sesion.php",
		data: 'contra='+$("#pwd").val()+ '& nombre='+$("#correo").val(),
		method: "POST",
		dataType:"json",
		success: function(data){
			if (data.exito==1) {
				window.location.replace("../paginasweb/pagina_inicio.php");
			}else{ alert(data.mensaje);}
		}
	  });
   	}else{
   	 alert("Falta completar al menos uno de los campos");
   	}
   });
   
});

/*	if (correo != "" && pwd != ""){
	window.location.href = "Pagina_Inicio.html"	
	}

});*/