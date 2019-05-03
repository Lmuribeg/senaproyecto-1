<?php
session_start();

if (isset($_SESSION["usuario"])) {
	
}else{
	header("Location:login.php");
}

?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>registro</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet"  href="css/bootstrap.min.css">

<link rel="stylesheet"  href="css/estilos.css">

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</head>
<body class="fondo1">






<a href="logout.php" class="cambio btn btn-dark float-right"> Cerrar seccion</a>
	<p>
<div class="container-fluid ">

  <button class="btn btn-info btn-lg" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">seccion 1</button>


</p>
<div class="row">
<div class="col">
<div class="collapse multi-collapse" id="multiCollapseExample1">
  <div class="col-lg-3 card card-body">


   <td><a href="seccion1.php" class="bt col-lg-6 btn btn-warning">Editar</a></td>
  <td><button class=" col-lg-6 btn btn-danger">Eliminar</button></td>
  </div>
</div>
</div>


  </div>









<p>


  <button class="btn btn-info btn-lg" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">seccion 2</button>


</p>
<div class="row">
<div class="col">
<div class="collapse multi-collapse" id="multiCollapseExample1">
  <div class="col-lg-3 card card-body">


   <td><a href="seccion2.php" class="bt col-lg-6 btn btn-warning">Editar</a></td>
  <td><button class=" col-lg-6 btn btn-danger">Eliminar</button></td>
  </div>
</div>
</div>


  </div>




  <p>


  <button class="btn btn-info btn-lg" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">seccion 3</button>


</p>
<div class="row">
<div class="col">
<div class="collapse multi-collapse" id="multiCollapseExample1">
  <div class="col-lg-3 card card-body">


   <td><a href="seccion3.php" class="bt col-lg-6 btn btn-warning">Editar</a></td>
  <td><button class="col-lg-6 btn btn-danger">Eliminar</button></td>
  </div>
</div>
</div>


  </div>


  <p>


  <button class="btn btn-info btn-lg" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">seccion 4</button>


</p>
<div class="row">
<div class="col">
<div class="collapse multi-collapse" id="multiCollapseExample1">
  <div class="col-lg-3 card card-body">


   <td><a href="seccion4.php" class="bt col-lg-6 btn btn-warning">Editar</a></td>
  <td><button class="col-lg-6 btn btn-danger">Eliminar</button></td>
  </div>
</div>
</div>


  </div>


    <p>


  <button class="btn btn-info btn-lg" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Registros</button>


</p>
<div class="row">
<div class="col">
<div class="collapse multi-collapse" id="multiCollapseExample1">
  


  
  <td><a href="editor.php"  class="col-lg-3 btn btn-danger">usuarios registrados</a></td>
  
</div>
</div>


  </div>













</div>







</body>
</html>

