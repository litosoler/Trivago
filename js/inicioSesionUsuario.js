$("#iniciar-sesion").click(function(){
	var correo = "";
	var pwd = "";
	correo = $("#correo").val();
	if (correo == ""){
		$("#correo").addClass("error");
	}else{
		$("#correo").removeClass("error");
	}
	pwd = $("#pwd").val();
	if (pwd == ""){
		$("#pwd").addClass("error");
	}else{
		$("#pwd").removeClass("error");
	}

	if (correo != "" && pwd != ""){
	window.location.href = "Pagina_Inicio.html"	
	}

});