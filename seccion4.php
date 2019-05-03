 
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

  <div class="container-fluid ">

	<form >

  <div class="row justify-content-center form-group">

     <section class="cu col-lg-4 po">
   
   
     <div class=" form-group">
      <h4 class="R">Editar seccion 4</h4>
    <label for="exampleInputPassword1">Editar Informacion</label><br>
    <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="nombre"> </textarea>
  </div>


   <div class=" form-group">
      
    <label for="exampleInputPassword1">Editar imagen  Fundacion </label><br>
    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="nombre">
  </div>
   
  
  
  <div class="form-group form-check justify-content-center">
  </div>
  <a href="" type="submit" class="bt btn btn-danger">guardar cambios</a>
   <a href="editar.php." type="submit" class="bt btn btn-danger">regresar</a>
   </div>
   </section>
</form>

</div>

</body>
</html>