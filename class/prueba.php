<?php 
//include_once("../class/class_conexion.php");
//$conexion = new Conexion();
//$conexion->establecerConexion();
$link=oci_connect("TRIVAGO", "oracle", "localhost/xe");
			if (!$link){
				echo "No se pudo conectar con oracle";
				exit;
			}else{
				echo "Ya pasamos";
			}
 ?>