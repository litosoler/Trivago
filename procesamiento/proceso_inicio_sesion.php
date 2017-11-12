<?php 
session_start();
include_once("class_conexion.php");
$conexion = new Conexion();
$conexion->establecerConexion();
$resultado=$conexion->ejecutarInstruccion("SELECT * FROM TBL_USUARIO");
$variable['exito']=0;
$variable['mensaje']="Usuario no existe, revise su correo o contraseña que escribió.";
$b=0;
$n=0;
$n1=oci_num_rows($resultado);
$resultadonuevo=oci_fetch_array($resultado);

while ($resultadonuevo=oci_fetch_array($resultado)!=FALSE) {
	if ($resultadonuevo["CORREO_ELECTRONICO"] == $_GET["correo"] && $resultadonuevo['CONTRASENIA']==$_GET["contra"]) {
		$variable['exito']=1;
		$_SESSION["codigo_usuario"]=$resultadonuevo['CODIGO_USUARIO'];
		$_SESSION["nombre"]=$resultadonuevo['NOMBRE'];
		$_SESSION["correo"]=$resultadonuevo['CORREO_ELECTRONICO'];
		$_SESSION['contrasenia']=$resultadonuevo['CONTRASENIA'];
		break;
	}
}

echo json_encode($variable);
 ?>