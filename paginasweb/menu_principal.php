
<?php
 session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimum-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Replica de Trivago">
    <meta name="author" content="Grupo # x">
    <title>Trivago - Proyecto</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/proyecto.css">
    <link rel="stylesheet" type="text/css" href="../css/resultados.css">
    <link rel="stylesheet" type="text/css" href="../css/css_menu_principal.css">

  </head>
  <body>
  	<div id="contenedor_general">
  		<div id="barra-horizontal" class="container-fluid navbar ">
			<div class="row" style="width: 100%;">
				<div class="col-md-6"></div>
				<div class=" col-md-1" align="center">
					<a class="navbar-brand" href="Pagina_Inicio.html">
						<strong>
							<span style="color: #2973B8;">tri</span><span style="color: #E37A1F;">va</span><span style="color: #A3171A ;">go</span>
						</strong>
					</a>
				</div>
				<div class="col-md-3"></div>
				<div id="menu-principal" class="col-md-2">
					
						<!--favoritos-->	
						<div class="dropdown col-md-4 menu" style="margin-left:30%;padding:0px;height: 65px; width: 50px; line-height: 65px;"  align="center" >
							<a id="favoritos"  class="btn dropdown-toggle"  data-toggle="dropdown" style="width: 100%; height: 100%;"><span class="glyphicon glyphicon-heart-empty" ></span></a>
							<ul id="favoritos-dropdown-menu" class="dropdown-menu">
								<li><img src="../img/mensaje-favoritos.png"></li>
							</ul>
						</div>
						<!-- Modenda-->	
						<div  class="dropdown col-md-4 menu" style="padding:0px;height: 100%; width: 50px"  align="center">
							<a   id="moneda" class="btn  dropdown-toggle " data-toggle="dropdown"  style="width: 100%; height: 100%;">USD</a>
							<ul id="moneda-dropdown-menu" class="dropdown-menu">
								<li><a href="#">USD</a></li>
								<li><a href="#">Lempira</a></li>
							</ul>
						</div>
						<!--perfil-->
						<div class="dropdown col-md-4 menu" style="padding:0px;height: 100%; width: 83px" align="center" >
							<a id="cuenta" class="btn  dropdown-toggle" data-toggle="dropdown"  style="width: 100%; height: 100%;">Mi Perfil<span class="caret"></span></a>
							<ul id="cuenta-dropdown-menu" class="dropdown-menu">
								<li><a href="inicio-sesion.html">Iniciar Sesión</a></li>
								<li class="divider"></li>
								<li><a href="registro-usuarios.html">Registrarse</a></li>
							</ul>
						</div>
					
				</div>	
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../libs/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>	
     <script type="text/javascript">
    	var contador=0;
		$("#buscar").keypress(function(){
			contador++;
			if (contador==4)
			window.location.href = "resultados.php?valor=" + $(this).val();
		});
    </script>	
  </body>
 </html>