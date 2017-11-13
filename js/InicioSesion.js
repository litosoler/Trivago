$(document).ready(function(){
   $("iniciar-sesion").click(function(){ 	
   	if ($("#pwd").val()!="" && $("#correo").val()!="" ) {		
   		$.ajax({
		url:"../class/prueba.php",
		data: 'contra='+$("#pwd").val()+ '& correo='+$("#correo").val(),
		method: "POST",
		dataType:"json",
		beforeSens: function () {
			alert("dsgadgdashdg");
		},
		success: function(result){
			if (data.exito==1) {
				window.location.replace("../paginasweb/pagina_inicio.php");
			}else{ alert(result.mensaje);}
		},
	 });
   	}else{
   	 alert("Falta completar al menos uno de los campos");
   	}
   });
   
});
