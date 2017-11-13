<?php
include_once("class_conexion.php")
$conexion = new Conexion();
$conexion->establecerConexion();

$resultado = $conexion->query("SELECT * FROM TBL_USUARIO");

$Correo = $_POST=['correo'];
$Contrasenia = $_POST=['password'];

if ($conexion->query(INSERT INTO TBL_USUARIO ('CORREO_ELECTRONICO', 'CONTRASENIA') VALUES ( '$Correo','$Contrasenia')) {
	echo "Insertada con exito";

	
}else {
	echo "sdfsfds";
};


?>