$(document).ready(function(){
   $("#btn_guardar_ajustes").click(function(){ 	
   	if ($("#pwd").val()!="" && $("#correo").val()!="" ) {		
   		$.ajax({
		url:"../class/registro-usuario-procesar.php",
		data: 'contra=' + $("#pwd").val() + '& correo=' + $("#correo").val(),
		method: "POST",
		dataType:"json",
		success: function(data){
			if (data.exito==1) {
				alert(data.mensaje);
				window.location = "../ajustes_registro.html";
			}else{ 
               alert(data.mensaje);
			}
		},
	 });
   	}else{
   	 alert("Falta completar al menos uno de los campos");
   	}
   });
   
});
