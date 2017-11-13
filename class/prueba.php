<?php 
session_start();
include_once("class_conexion.php");
$conexion = new Conexion();
$conexion->establecerConexion();
$resultado=$conexion->ejecutarInstruccion($conexion,"SELECT * FROM TBL_USUARIO");
$variable['exito']=0;
$variable['mensaje']="Usuario no existe, revise su correo o la contraseña que escribió.";
//$resultadonuevo=oci_fetch_array($resultado);

while ($resultadonuevo=oci_fetch_array($resultado)!=FALSE) {
	if ($resultadonuevo["CORREO_ELECTRONICO"] == $_POST["correo"] && $resultadonuevo['CONTRASENIA']==$_POST["contra"]) {
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