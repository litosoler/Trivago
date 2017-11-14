<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="Coffee Icon" href="../img/trivago.png">

  <title> Zona para miembros </title>

  
  <link href="css/bootstrap.min.css" rel="stylesheet">

  
  <link href="css/clasescss.css" rel="stylesheet" type="text/css">
  

</head>

<body>

<div>

  <nav class="navbar">
    <div class="container-fluid envoltura-barra-navegacion-top">
      
      <div class="navbar-header text-center">
       

        <a onclick="abrirMenu();" href="#menu-toggle" class="btn btn-default boton-barra-menu navbar-toggle collapsed glyphicon glyphicon-align-justify" id="menu-toggle"> Abrir Menú </a>

        <a class="foto" href="index.html">
            <img src="img/logoPrincipal.png" alt="trivago" height="44" width="152">
        </a>
        
      </div>

      

    </div>
  </nav>
 
  <div id="wrapper">
    
    
    <div class="container-fluid container-fluid-fix">
      
      <div class="row row-margin-fix">
        
        
        <div id="sidebar-wrapper" class="col-sm-3 col-md-2 col-lg-2 sidebar hidden-xs envoltura-barra-principal">
          <ul id="btn-close" class="nav nav-sidebar hidden borde-close">
            <li class="active"><a class="lista" href="#">[x] Close</a></li>
          </ul>
          <ul class="nav nav-sidebar borde">
            <li class="active"><a class="lista " href="index.html"> < Volver a la Búsqueda <span class="sr-only">(current)</span></a></li>
          </ul>
           <ul class="nav nav-sidebar borde-dos">
            <li class="active"><a class="lista" href="perfilprincipal.html">Panel de Control</a></li>
            <li class="active"><a class="lista" href="ajustes.html">Ajustes</a></li>
            <li class="active"><a class="lista" href="reservas.html">Reservas</a></li>
            <li class="active"><a class="lista" href="listadehoteles.html">Listas de Hoteles</a></li>
            <li class="active"><a class="lista" href="alertadecambioprecios.html">Alerta de Precios</a></li>
            <li class="active"><a class="lista" href="ultimasbusquedas.html">Busquedas Recientes</a></li>
            <li class="active"><a class="lista" href="suscripciones.html">Suscripciones</a></li>
          </ul>
          <ul class="nav nav-sidebar borde-tres">
            <li class="active"><a class="lista" href="log-in.html">Cerrar Sesión</a></li>
          </ul>
        </div>
       
        <div id="contenido-pagina" class="col-sm-9 col-md-10 col-lg-10 main">
          <h1 class="titulo-cuenta page-header">Ajustes</h1>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
            
	            <div class="envoltura-cuerpo-ajustes">
	            

	            <details class="cuerpo-ajustes">
	            	
	            	<summary class="titulo-tabla-ajustes">
	            		Informacion Personal
	            	</summary>

	            	<div class="tabla-ajustes">
	            		<form>
	            			
		            		<div class="form-group form-inline">
		            			
		            			<div class="form-group form-inline prueba-div">
											  	<p class="ajuste-label" style="display: block;">Sexo</p>
											    <label><input id="genero" type="radio" name="rbt-gustos" value="M">    Masculino</label>
	                  		                    <label><input id="genero" type="radio" name="rbt-gustos" value="F">    Femenino</label>
											</div>
		            		</div>

	            			<div class="form-group form-inline">

										  <div class="form-group form-inline prueba-div">
										  	<p class="ajuste-label">Nombres (requerido)</p>
										    <input id="nombre" type="text" class="prueba-div form-control" placeholder="Nombre">
										  </div>

										  <div class="form-group form-inline prueba-div">
										  	<p class="ajuste-label">Apellidos (requerido)</p>
										  	 <input id="apelido" type="password" class="prueba-div form-control" placeholder="Apellido">
										  </div>

									 	</div>


									 	<div class="form-group form-inline prueba-div">
										  	<p class="ajuste-label">Fecha de Nacimiento</p>
										    <input type="date" name="mes" step="1" class="prueba-div form-control">
										</div>

										<div class="form-group form-inline">
									 		

										  <div class="form-group form-inline prueba-div">
										  	<p class="ajuste-label">Codigo Postal</p>
										  	 <input id="codigo-postal" type="password" class="prueba-div form-control" placeholder="Apellido">
										  </div>

									 	</div>

									 	<div class="form-group form-inline">
									 		
										  <div class="form-group form-inline prueba-div">
										  	<p class="ajuste-label">Ciudad</p>
										  	<!-- <input type="password" class="prueba-div form-control" placeholder="País"> -->
										  	 <select class="form-control" id="seleccionar-ciudad" name="seleccionar-ciudad">
										  	 	    <option value="none" selected="">Seleccione una Ciudad</option>
													<?php 
													  	session_start();
														include_once("class_conexion.php");
														$conexion = new Conexion();
														$sql = "SELECT NOMBRE_CIUDAD FROM TRIVAGO.TBL_CIUDAD";
														$resultado=$conexion->ejecutarInstruccion($sql);
														while ($resultadonuevo=oci_fetch_array($resultado)!=FALSE) {
															echo sprintf("<option value='%s'>'%s'</option>",$resultadonuevo[0],$resultadonuevo[0]);
														}
													 ?>
										  	 	
										  	 </select>
										  </div>

									 	</div>

									 	<div class="form-group form-inline">
									 		<div class="form-group form-inline prueba-div">
										  	<p class="ajuste-label">Numero de Celular</p>
										    <input type="tel" class="prueba-div form-control" placeholder="Telefono">
										  </div>

										  <div class="form-group form-inline prueba-div">
										  	<p class="ajuste-label">e-mail</p>
										  	 <input type="email" class="prueba-div form-control" placeholder="Correo">
										  </div>

									 	</div>

										<div class="form-group form-inline text-right">
									  	<button id="btn_guardar_ajustes" type="submit" class="btn btn-default">Guardar</button>
										</div>

	            		</form>

	            	</div>

	            </details>
	            <!-- /#Tabla 1 -->

	            <!--Tabla 2 
	            <details class="cuerpo-ajustes">

	            	<summary class="titulo-tabla-ajustes">
	            	cambiar contraseña
	            	</summary>

	            	<div class="tabla-ajustes">
	            		<form>
	            			
	            			<div class="form-group form-inline">

										  <div class="form-group form-inline prueba-div">
										  	<p>Contraseña anterior</p>
										    <input type="password" class="prueba-div form-control">
										    <input type="checkbox" name="chk-" value="">    Mostrar Contraseña
										  </div>

										  <div class="form-group form-inline prueba-div">
										  	<p>Cambiar la contraseña</p>
										  	 <input type="password" class="prueba-div form-control">
										  	 <input type="checkbox" name="chk-" value="">    Mostrar Contraseña
										  </div>

									 	</div>

										<div class="form-group form-inline text-right">
									  	<button type="submit" class="btn btn-default">Guardar Contraseña</button>
										</div>

	            		</form>

	            	</div>

	            	<div class="tabla-ajustes">
	            		<p class="ajuste-label">Actividades recientes</p>
	            	</div>

	            </details>-->
	            <!-- /#Tabla 2 -->

	            </div>

            </div>
          </div>

        </div>
        <!-- /#Contenido de la Pagina -->

      </div>
    </div>
    <!-- /# Barra Izquierda & Contenido de la Pagina -->
  </div>
  <!-- /#Envoltura Barra Izquierda & Contenido de la Pagina -->

</div>
<!-- /#Todo el Cuerpo de la pagina -->

  <!-- ========================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>


  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Custom JavaScript -->
  <script src="js/controlador.js"></script>
  <script src="js/funcionalidades.js"></script>
  <script src="js/ajustes_registro.js"></script>

</body>
</html>
