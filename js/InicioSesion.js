$(document).ready(function(){
   $("#btn-iniciar-sesion").click(function(){ 	
   	if ($("#pwd").val()!="" && $("#correo").val()!="" ) {		
   		$.ajax({
		url:"../procesamiento/prueba.php",
		data: 'contra='+$("#pwd").val()+ '& correo='+$("#correo").val(),
		method: "GET",
		dataType:"json",
		success: function(data){
			if (data.exito==1) {
				//window.location.replace("../paginasweb/pagina_inicio.php");
				alert("paso1")
			}else{ 
               alert("paso2");
			}
		},
	 });
   	}else{
   	 alert("Falta completar al menos uno de los campos");
   	}
   });
   
});
