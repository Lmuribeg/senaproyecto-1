<?php

$nombre2=$_POST["nom"];
$correo1=$_POST["correo"];


require 'php/conexion.php';

$sql= "INSERT INTO registros(nombre, correo) VALUES ('$nombre2','$correo1')";




$resultado = mysqli_query($conexion, $sql);
if (!$resultado) {
	echo "Error al registrase";
}else{
	echo "Usuario registrado exitosamente";
}

echo "<script> location.href='editor.php'</script";

mysqli_close($conexion);







?>