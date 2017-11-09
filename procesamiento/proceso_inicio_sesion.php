<?php  
session_start();
include_once("../class/class_conexion.php");
$conexion = new Conexion();
$conexion->establecerConexion();
$resultado=$conexion->ejecutarInstruccion("SELECT * FROM tbl_usuarios WHERE nombre_usuario='".$_POST['nombre']."'");
$variable['exito']=0;
$variable['mensaje']="No existe el usuario";
$b=0;
$n=0;
$n1=mysqli_num_rows($resultado);

while ($b==0) {
	$n=$n+1;
	$resultadonuevo=$conexion->obtenerFila($resultado);
	if ($resultadonuevo["contrasenia"] == sha1($_POST["contra"])) {
		$variable['exito']=1;
		$variable['mensaje']="Usuario encontrado";
		$_SESSION["codigousuario"]=$resultadonuevo['id'];
		$_SESSION["nombre"]=$resultadonuevo['nombre_usuario'];
		$_SESSION["email"]=$resultadonuevo['email'];
		$_SESSION['contrasena']=$resultadonuevo['contrasenia'];
		$b=1;
	}

	if($n==$n1){
		$b=1;
	}
}

echo json_encode($variable);

?>