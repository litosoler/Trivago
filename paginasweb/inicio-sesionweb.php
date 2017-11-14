<?php
 session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Iniciar Sesión  en Trivago</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimum-scale=1">
	<link rel="shortcut icon" href="../img/logo-trivago.png">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- jquery-->
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!--bootstrap date picker -->
	<link rel="stylesheet" type="text/css" href="../libs/bootstrap-datepicker/css/bootstrap-datepicker.css">
	<script type="text/javascript" src="../libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<!-- nuevos iconos -->
	<link rel="stylesheet" type="text/css" media="all" href="../css/whhg.css" />
	<!--Archivos Personales-->
	 <link rel="stylesheet" type="text/css" href="../css/estandares.css">
	 <style type="text/css">
  		#clear{
    		clear: both;
  		}

  		body{
    		background-color: #EBECED;
  		}

          
         
		  #caja{
		          font-size: 16px;
		          margin-top:50px;
		          border:1px;
		          width: 410px;
		          height:293px;
		          line-height: 20px;
		         
		          padding-left: 16px;
		          padding-right: 16px;
		          background:white;
		          border-style:solid;
		          border-color:#EBECED;
		         
		  }
		 
		  .fuenteform{
		    font-size: 14px;
		  }
		  
		  .botonderecha{
		      float: right;
		  }
		  #cuerpo{
		    padding-top: 40px;
		  }
		  #registrar{
		    padding-top: 30px;
		  }
	 </style>
</head>

<body>
     <div class="contenedor_general" >
     	 <nav class="navbar  navbar-fixed-top" id="titulo">
     		<div class="container" id="logo_enlace" align="center"> 
      			<a href="pagina_inicio.php"> <img src="../img/logoPrincipal.png"> </a>
      			<img src="../img/candado.png" align="right"> 
     		</div>
         </nav>
         <div id="cuerpo_general" class="navbar" align="center">
         	<div id="cuerpo" class="container" > 
          	<div class="row">
      			<div class="col-md-offset-1 col-md-4">
         			<div id="caja" style="text-align: center;">
                		<h3 style="font-size: 20px">Inicia sesion con una red social</h3>
                		<a href="#"> <img src="../img/loginface.png" style="margin-top: 5px; margin-bottom: 15px"> </a>
                		<a href="#"> <img src="../img/logingoogle.png" style="margin-bottom: 15px"> </a>
                		<p style="font-size: 14px">No publicaremos nada en tu Facebook o Google+ sin consultarte primero.</p>
                	</div> 
      			</div>
      			<div class="col-md-offset-1 col-md-4 col-md-offset-2">
                	<div id="caja">
                		<h3 style="font-size: 20px; text-align: center;">Inicia sesion con tu e-mail</h3>
               			<div class="fuenteform">
                			<div class="form-group">
                  				<label for="correo">Correo Electronico:</label>
                  				<input type="correo" class="form-control" id="correo">
                			</div>
                			<div class="form-group">
                  				<label for="pwd">Contraseña:</label>
                  				<p style="float: right;"><a href="olvido_contrasena.php"> ¿Olvidaste tu contraseña?</a></p>
                  				<input type="password" class="form-control" id="pwd">
                			</div>
               				<div class="checkbox">
                  				<label><input type="checkbox"> Mostrar contraseña</label>
                  				<label><input type="checkbox"> Recordar mis datos</label>
                			</div>
                			<button id="btn-iniciar-sesion" class="btn btn-primary btn-lg botonderecha" >Iniciar sesion</button>
                		</div>
         			</div>
      			</div>      
    		</div>
        	</div>
        	<div class="row">
   				<div id="registrar"  >
      				<h5>¿No registrado? <a href="registro-usuarios.php">Registrate</a></h5>
    			</div>  
    		</div>
        </div>
    </div>
    <!-- jquery-->
  	<script type="text/javascript" src="../libs/jquery.js"></script>
  	<!--personales-->
    <script type="text/javascript" src="../js/inicioSesion.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
</body>
</html>