<?php 
include_once("class_conexion.php");
$conexion = new Conexion();
$conexion->establecerConexion();

$conexion->ejecutarInstruccion("SELECT* FROM TBL_USUARIO");


 ?>