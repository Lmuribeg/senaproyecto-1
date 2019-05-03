<?php
session_start();

if (isset($_SESSION["usuario"])) {
	
}else{
	header("Location:login.php");
}




echo "Bienvenido a la pagina";

echo "<a href='logout.php'>Cerrar</a>";
?>