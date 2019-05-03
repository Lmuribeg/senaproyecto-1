<?php

$nombre=$_POST["nom"];
$contra=$_POST["con"];



$link=mysqli_connect("localhost","root","","paginafinal") or die ("Error en la conexion");
$sql = "SELECT * FROM logina WHERE usuarios_log= '$nombre' AND contra_log='$contra'";
$resultado = mysqli_query($link,$sql);

$count = mysqli_num_rows($resultado);


if ($count==1) {
    session_start();
    $_SESSION["usuario"] = $nombre;
	header("Location:editar.php");
}else{
	echo "<script> location.href='login.php?error=dato'</script>";
}





mysqli_close($link);



?>






