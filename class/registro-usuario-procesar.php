<?php 
session_start();
include_once("class_conexion.php");

$variable["exito"]=1;
$variable["mensaje"]="Por favor termine de completar el siguiente formulario para finalizar el registro con exito";
/*$conexion = new Conexion();*/
//$conexion->establecerConexion();

/*$sql = sprintf("INSERT INTO TBL_USUARIO VALUES ('%s','%s'),",
	     $_GET["correo"],
		 $_GET["pwd"]  

	 );

$resultado=$conexion->ejecutarInstruccion($sql);
<<<<<<< HEAD
*/
/*
$variable["mensaje"]="Error, usuario no encontrado o contraseña incorrecta";
$resultadonuevo=oci_fetch_array($resultado);*/

//if ($resultadonuevo[1]==$_GET['correo']) {
	    //$_SESSION["codigo_usuario"]=$resultadonuevo[3];
		//$_SESSION["nombre"]=$resultadonuevo[0];
		$_SESSION["correo"]=$_POST["correo"];
		$_SESSION['contrasenia']=$_POST["contra"];
		//$variable["exito"]=1;
		//$variable["mensaje"]="Se debe redireccionar";
=======


$variable["mensaje"]="Error, en registros vuelva a comentar";
//$resultadonuevo=oci_fetch_array($resultado);

//if ($resultadonuevo[1]==$_GET['correo']) {
	    $_SESSION["codigo_usuario"];
		$_SESSION["nombre"];
		$_SESSION["correo"];
		$_SESSION['contrasenia']
		$variable["exito"]=1;
		$variable["mensaje"]="Se debe redireccionar";
>>>>>>> 0977ea69b459803714015260700cf184274045c6
//}
		

echo json_encode($variable);
 ?>