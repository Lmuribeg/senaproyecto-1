
    
<?php 

$idEli = $_GET["idElim"];

require 'php/conexion.php';

 $sql = "DELETE  FROM registros  WHERE id_registros='$idEli'";

 $resultado = mysqli_query($conexion, $sql);

 //header("Location.href=' editor.php'");
echo "<script> location.href='editor.php'</script>";


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
</head>
    <body>