<?php 
session_start();
include_once("class_conexion.php");
$conexion = new Conexion();
$
$sql = "SELECT NOMBRE_CIUDAD, CODIGO_CIUDAD FROM TRIVAGO.TBL_CIUDAD";
$resultado=$conexion->ejecutarInstruccion($sql);
	while ($resultadonuevo=oci_fetch_array($resultado)!=FALSE) {
		//echo "<option value='$resultadonuevo[0]'>'$resultadonuevo[0]'</option>";
		echo $resultadonuevo[0];
	}
?>