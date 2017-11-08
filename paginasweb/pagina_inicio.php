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

  </head>

  <body>

    <!-- <nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
		    	<div class="titulo">
		    		<a class="navbar-brand" href="Pagina_Inicio.html">
			    		<strong>
				    		<span style="color: #2973B8;">tri</span><span style="color: #E37A1F;">va</span><span style="color: #A3171A ;">go</span>
			    		</strong>
		    		</a>
		    	</div>
		    </div>
		    <div class="botones">
		    	<ul class="nav navbar-nav navbar-right">
		        <li style="border-left: 1px solid #e1dfdf;"><a href="#"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
		        <li><a href="#">US</a></li>
		        <li><a href="#">ESP</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi Perfil <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Iniciar Sesi�n</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Registrate</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div>
		  </div>
	</nav> -->

	<!-- barra superior primera -->
   <div class="contenedor_general">	
	<div id="barra-horizontal" class="container-fluid navbar ">
		<div class="row" style="width: 100%;">
			<div class=" col-md-offset-5 col-md-1">
				<a class="navbar-brand" href="Pagina_Inicio.html">
					<strong>
						<span style="color: #2973B8;">tri</span><span style="color: #E37A1F;">va</span><span style="color: #A3171A ;">go</span>
					</strong>
				</a>
			</div>	
			<div id="menu-principal" class="col-md-offset-4 col-md-2" >
				<div class="row">
					<!--favoritos-->	
					<div class="dropdown"  style=" margin-right: 10px;">
						<a id="favoritos"  class="btn dropdown-toggle col-md-2"  data-toggle="dropdown"><span class="glyphicon glyphicon-heart-empty" ></a>
						<ul id="favoritos-dropdown-menu" class="dropdown-menu">
							<li><img src="../img/mensaje-favoritos.png"></li>
						</ul>
					</div>
					<!-- Modenda-->	
					<div  class="dropdown" style="margin-right: 20px;">
						<a   id="moneda" class="btn  dropdown-toggle col-md-2" data-toggle="dropdown">USD</a>
						<ul id="moneda-dropdown-menu" class="dropdown-menu">
							<li><a href="#">USD</a></li>
							<li><a href="#">Lempira</a></li>
						</ul>
					</div>
					<!--perfil-->
					<div class="dropdown" style="margin-right: 20px;">
						<a id="cuenta" class="btn  dropdown-toggle col-md-2" data-toggle="dropdown">Mi Perfil<span class="caret"></span></a>
						<ul id="perfil-dropdown-menu" class="dropdown-menu">
							<li><a href="inicio-sesion.html">Iniciar Sesi�n</a></li>
							<li class="divider"></li>
							<li><a href="registro-usuarios.html">Registrarse</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="container">
    	<div class="row">
    		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    			<div class="trivago">
	        	<h1>Encuentra tu hotel ideal<br>al mejor precio</h1>
		        	<div class="search">
	        			<input id="buscar" type="search" name="main-search" class="input-search" placeholder="Ej. Tegucigalpa">
	        			<button><strong>Buscar</strong></button>
	        		</div>
	        </div>
     		</div>
    	</div>

    </div>



</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
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
