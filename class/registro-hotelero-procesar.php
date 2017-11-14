<?php 
session_start();
include_once("class_conexion.php");

$variable["exito"]=0;
$conexion = new Conexion();
//$conexion->establecerConexion();

$sql = sprintf("INSERT INTO TBL_USUARIO VALUES ('%s','%s','%s','%s','%s','%s','%s','%s'),",
	     $_GET["txt_nomehotel"],
		 $_GET["slc_tra"],
		 $_GET["cargo_id"],
		 $_GET["slc_tra"],
		 $_GET["nombre-usr"],
		 $_GET["apellido-usr"],
		 $_GET["txt_tel"],
		 $_GET["correo"],
		 $_GET["pwd"]

	 );
echo $sql;
$resultado=$conexion->ejecutarInstruccion($sql);
echo $sql;

$variable["mensaje"]="Error, usuario no encontrado o contraseña incorrecta";
$resultadonuevo=oci_fetch_array($resultado);

//if ($resultadonuevo[1]==$_GET['correo']) {
	    $_SESSION["codigo_usuario"]=$resultadonuevo[3];
		$_SESSION["nombre"]=$resultadonuevo[0];
		$_SESSION["correo"]=$resultadonuevo[1];
		$_SESSION['contrasenia']=$resultadonuevo[2];
		$variable["exito"]=1;
		$variable["mensaje"]="Se debe redireccionar";
//}
		

echo json_encode($variable);
 ?>