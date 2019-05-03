<?php

require 'php/conexion.php';
$sql = "SELECT * FROM registros";

$resultado =mysqli_query($conexion,$sql);


session_start();

if (isset($_SESSION["usuario"])) {
  
}else{
 echo "<script> location.href='login.php'</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>lista de publicaciones</title>
  <meta charset="utf-8">
  <meta <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  

<div class="fondo1">

    
      <a href="logout.php"  class="cambio btn btn-dark float-right"> Cerrar sección</a>
      <div class="barra"></div>
       </div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      
      <th scope="col">Eliminar</th>
      <th scope="col">correo</th>
      
    </tr>
  </thead>

  <?php

   while ($row = mysqli_fetch_array($resultado)) {
  echo "<tbody>";
    echo "<tr>";
      
     echo "<td> ". $row["nombre"]."</td>";


  

      echo "<td><a href='eliminar.php?idElim=";
      echo $row['id_registros'];
      echo"'><button class='btn btn-danger'>Eliminar</button></a></td>";
        
        echo "<td> ". $row["correo"]."</td>";

      echo "<td><a href='enviarcorreo.php?idEnvi=";
      echo $row['id_registros'];
      echo ">'<button class='btn btn-danger'>Enviar correo</button></a></td>";
    echo "</tr>";

 
  echo "</tbody>";
}
?>



</table>

<a href="editar.php" class="bt btn btn-info btn-lg float-right"> Regresar</a> 


</body>
</html>
