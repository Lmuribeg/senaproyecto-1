<?php

require "datos.php";

$conexion = mysqli_connect($servidorBD, $usuarioBD, $contraBD, $nombreBD );

if (!$conexion) {
   echo "Error al conectar a la base de datos";
}else{
	
}


?>