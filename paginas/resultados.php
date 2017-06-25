

<!DOCTYPE html>
<html>
<head>
	<title>Trivago</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../img/logo-trivago2.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- jquery-->
	<script type="text/javascript" src="../libs/jquery.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!--bootstrap date picker -->
	<link rel="stylesheet" type="text/css" href="../libs/bootstrap-datepicker/css/bootstrap-datepicker.css">
	<script type="text/javascript" src="../libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<!--archivos personales -->
	<link rel="stylesheet" type="text/css" href="../css/resultados.css">
	<!-- nuevos iconos -->
	<link rel="stylesheet" type="text/css" media="all" href="../css/whhg.css" />
</head>

<body style="background-color: #ebeced">
	<!-- barra superior primera -->
	<div id="barra-horizontal" class="container-fluid">
		<div class="row">
			<div class=" col-md-offset-5 col-md-1">
				<a class="navbar-brand" href="Pagina_Inicio.html">
					<strong>
						<span style="color: #2973B8;">tri</span><span style="color: #E37A1F;">va</span><span style="color: #A3171A ;">go</span>
					</strong>
				</a>
			</div>	
			<div id="menu-principal" class="col-md-offset-3 col-md-3">
				<div class="row">
					<!--favoritos-->	
					<div class="dropdown">
						<a id="favoritos"  class="btn dropdown-toggle col-md-2"  data-toggle="dropdown"><span class="glyphicon glyphicon-heart-empty" ></a>
						<ul id="favoritos-dropdown-menu" class="dropdown-menu">
							<li><img src="../img/mensaje-favoritos.png"></li>
						</ul>
					</div>
					<!-- Modenda-->	
					<div  class="dropdown">
						<a   id="moneda" class="btn  dropdown-toggle col-md-2" data-toggle="dropdown">USD</a>
						<ul id="moneda-dropdown-menu" class="dropdown-menu">
							<li><a href="#">USD</a></li>
							<li><a href="#">Lempira</a></li>
						</ul>
					</div>
					<!--idiomas-->
					<div  class="dropdown">
						<a   id="idioma" class="btn  dropdown-toggle col-md-2" data-toggle="dropdown">ES</a>
						<ul id="idioma-dropdown-menu" class="dropdown-menu">
							<li><a href="#">Español</a></li>
							<li><a href="#">Ingles</a></li>
						</ul>
					</div>
					<!--perfil-->
					<div class="dropdown">
						<a id="cuenta" class="btn  dropdown-toggle col-md-2" data-toggle="dropdown">Mi Perfil<span class="caret"></span></a>
						<ul id="perfil-dropdown-menu" class="dropdown-menu">
							<li><a href="inicio-sesion.html">Iniciar Sesion</a></li>
							<li class="divider"></li>
							<li><a href="registro-usuarios.html">Registrarse</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- barra superior segunda -->
<div id="barra-horizontal2" class="container-fluid">
	<div id="linea1" class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="row">
				<input type="text" autofocus id="barra-busqueda" class="input-text col-md-10 " value="<?php if(isset($_GET["valor"])) echo $_GET["valor"]; ?>" >
				<button id="buscar" class="btn btn-primary col-md-2">buscar</button>
			</div>
		</div>
	</div>
	<div id="linea2" class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="row">
				<div class="envoltura col-md-4">
					<div class="input-group date ja-date">
						<input id="fecha-entrada" type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
					</div>
				</div>
				<div class="col-md-4">
					<div class="input-group date ja-date">
						<input id="fecha-salida" type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
					</div>
				</div>
				<div  class="dropdown envoltura">
					<a   id="numero-personas" class=" col-md-4 btn  dropdown-toggle" data-toggle="dropdown">Indiviual</a>
					<ul id="cuartos-dropdown-menu" class="dropdown-menu">
						<li><a href="#">Individual</a></li>
						<li class="divider"></li>
						<li><a href="#">Doble</a></li>
						<li class="divider"></li>
						<li><a href="#">Familiar</a></li>
						<li class="divider"></li>
						<li><a href="#">Mùltiple</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>	
</div>
<!-- Cuerpo de la Pagina-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1"></div>
		<!-- Barra Izquierda -->
		<div class="col-md-3" >
			<div id="barra-izquierda" >
			<div id="cuadro-mapa-externo">
					<div id="cuadro-mapa">
						<p id="btn-mapa">Ver mapa</p>
					</div>
				</div>
				<!-- la en como prefijo de los nombre significa que son los contenedores de los filtros. -->
				<div id="cuadro-filtro">
					<div id="c-estrellas"></div>
					<div id="c-puntuacion"></div>
					<div id="c-precio"></div>
					<div id="c-distancia"></div>
					<div id="c-mas-buscado"></div>
					<div id="c-busacdor-nomnbre"></div>
					<div id="c-borrar-filtros"></div>
				</div>
			</div>
		</div>
		<!-- Parte Central -->
		<div class="col-md-7 borde1" >
			<div class="row">
				<div class="col-md-12" style="padding: 0px; margin: 0px;">
					<div class="col-md-5">

						<p id="nums-resultados" class="margen1"> <strong>921</strong> de 18,000 hoteles</p>
					</div>
					<div class="col-md-5" >
						<!--Este es el select de ordenar informacion-->
						<select id="odernar-por" title="ordenar-por" class="selectpicker flecha menu-desplegable" style="width: 80%; margin-left: 100px;">
							<option value="o-popularidad">Ordenar por popularidad</option>
							<option value="p-valorizacion">Priorizar por valorización</option>
							<option value="p-precio">Priorizar por precio</option>
							<option value="o-puntuacion">Ordenar por puntuación</option>
							<option value="o-precio">Ordenar por precio</option>
						</select>
					</div>
					<div class="col-md-2">
						<div class="dropdown" style="width: 100%;"> 
							<button class="btn btn-default menu-desplegable" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color: white; margin-left: 25px;">
								Compartir
								<strong><span class="glyphicon glyphicon-menu-down" aria-hidden="true"	></span></strong>
							</button>
							<!--Este es el menu despegable de compartir-->
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="width: 270px; height: 330px; padding: 0.5em;">
								<li class="sinborde"><h3 class="h3-estilo1 sinborde2" style="">Comparte esta lista</h3></li>    
								<li role="separator" class="divider sinborde"></li>

								<li class="estilo-dropdown-menu" style="background-color: #5c6368;">
									<a href="#" style="color: #fff; font-weight: 700; font-size: 14px; line-height: 11px; vertical-align: center; background-color: #5c6368; ">
										<span class="glyphicon glyphicon-envelope" aria-hidden="true" style="font-size: 15px;"></span> 
										Compartir por email
									</a>
								</li>    								
								<li class="estilo-dropdown-menu" style="background-color: #3b589b; width: 98%">
									<a href="#" style="background-color: #3b589b; color: #fff; font-weight: 700; font-size: 14px; line-height: 11px; vertical-align: center;">
										<font style="font-size: 23px; background-color: #3b589b; ">f</font> 
										Compartir en Facebook
									</a>
								</li>    								
								<li class="estilo-dropdown-menu" style="background-color: #c94334; width: 98%">
									<a href="#" style="color: #fff; font-weight: 700; font-size: 14px; line-height: 11px; vertical-align: center; background-color: #c94334;">
										<font style="font-size: 23px; background-color: #c94334; ">G+</font> 
										Compartir en Google+
									</a>
								</li>    								
								<li class="estilo-dropdown-menu" style="background-color: #20ade5; width: 98%">
									<a href="#" style="color: #fff; font-weight: 700; font-size: 14px; line-height: 11px; vertical-align: center; background-color: #20ade5;">  
										<img src="../img/twitter-logo.gif" style="height: 20px; width: 25px; display: inline-block;" class="img-responsive"> 
										<p style="display: inline-block;">Compartir en Twitter</p>
									</a>
								</li>    								
								<li class="estilo-dropdown-menu" style="width: 98%; font-size: 12px;" >Copie y pegue el enlace para compartir su lista de hoteles con otros<br> <input type="url" readonly="readonly" id="enlace-compartir" class="i-compartir-enlace" value="http://www.diez.hn/">
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div id="contenedor-informacion-hoteles">
				<div class="row">
					<div class="col-md-12 well cont-inf-hot">
						<div class="col-md-2 borde2"><img src="../img/imagen-prueba.jpg" class="img-responsive img"></div>
						<div class="col-md-5 borde2">
							<a href="#" style="text-decoration:none; color: #37454d;" ><h3 class="cont-inf-hot-nombre" id="nombre-hotel" style="margin: 0px; margin-left: 10px;">Nombre  del Hotel ...</h3></a>
							<div id="puntuacion-estrellas" class="estrellas-puntuacion">
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
							</div>
							<div id="direccion-hotel" class="borde3">
								<a href="#" style="color: #37454d; text-decoration:none;"><p>esta es la direccion del hotel</p></a>
							</div>
							<div id="opiniones" class="borde31">
								<div class="row borde3" style="width: 105%; height: 100%;">
									<a href="#" style="color: #37454d; text-decoration:none;">
										<div class="col-md-2 rating-div" style="border: 0px;">
											<strong>90</strong>
										</div>
										<div class="col-md-10 rating-div-op">
											<strong>Calificacion</strong>
											(1400 opiniones)
										</div>
									</a>
								</div>
							</div>
							<div id="ofrece-wifi" class="borde3">
								<!--<i class="icon-wifi"></i>-->
								<span class="icon-wifi" id="font-wifi"></span>
								Wi-Fi gratis
							</div>
						</div>
						<div class="col-md-2 borde2 oferta-precio">
							<div class="bloque-no-linea empresas-comodas">
								<a href="#" style="color: #697379;">
									<p class="sinborde centrado" style="font-weight: lighter;">Travelocity </p>
									<p class="centrado" style="font-weight: 800;">$234.009</p> 
								</a>
							</div>
							<div class="bloque-no-linea empresas-comodas">
								<a href="#" style="color: #697379;">
									<p class="sinborde centrado" style="font-weight: lighter;">TripAdvisor </p>
									<p class="centrado" style="font-weight: 800;">$234.009</p> 
								</a>
							</div>
							<div class="bloque-no-linea empresas-comodas">
								<a href="#" style="color: #697379;">
									<p class="sinborde centrado" style="font-weight: lighter;">HotWired </p>
									<p class="centrado" style="font-weight: 800;">$234.009</p> 
								</a>
							</div>
							<div class="bloque-no-linea" id="mas-ofertas">
								<a href="#" style="color: #37454d;  text-decoration:none;"><strong>Más ofertas: 23</strong></a>
							</div>
						</div>
						<div class="col-md-3 borde2">
							<div class="bloque-no-linea empresas-mas-comoda">
								<a href="#" style="color: #697379;">
									<p class="sinborde centrado" style="font-weight: lighter;">HotWired </p>
									<p class="centrado" style="font-weight: 800;">$234.009</p> 
								</a>
							</div>
							<div class="bloque-no-linea" style="margin-left: 10px;">
								<button href="#" id="ir-oferta" style="color: white;"><strong>
									<div class="bloque-en-linea" style="margin-left: 25px;"> <strong>Ver oferta</strong></div>
									<div class="bloque-en-linea" style="margin-left: 35px;"><span class="glyphicon glyphicon glyphicon-menu-right" aria-hidden="true"></span></div>
								</strong></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>

<script type="text/javascript" src="../js/resultados.js"></script>
</body>
</html>