<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilos.css">

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
	<title>login</title>
</head>
<body class="fondo1">

	<div class="container-fluid "> 

    <section class="row justify-content-center">
	<div>
		<h3 class="center">LOGIN</h3>
		<hr>

		<form action="datosADMIN.php" method="post">
  <div class="colorlogin form-group ">
    <label for="exampleInputEmail1">Ingresar su nombre de usuario</label>
    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
   <div class="colorlogin form-group">
    <label for="exampleInputEmail12">Ingresar su contraseña</label>
    <input type="password" name="con" class="form-control" id="exampleInputEmail12" aria-describedby="emailHelp" placeholder="contraseña">
   
  </div">

<input type="submit" value="Ingresar"  class="nob boton btn btn-danger w-100 " onclick="'<a href=editar.php></a>'"/> 

<a href="index.html"type="submit" value="regresar"  class="nob boton btn btn-danger w-100 ">Regresar</a>
  

   
			
			
		</form>

		<div class="mensaje">
			<?php
             if (isset($_GET["error"])) {
              	echo "Los datos no son correctos";
              } 
			?>
		</div>
		


	</div>
</form>
</div>
</div>
<div>


	</section>
	


</body>
</html>