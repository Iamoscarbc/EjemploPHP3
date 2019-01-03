<?php

  include('./conexion.php');

  $idempleado=$_REQUEST['idempleado'];

  $query="DELETE FROM empleados WHERE idempleado='$idempleado'";

  $resultado = $conexion->query($query);

  if($resultado){
    header('Location: index.php');
  }else {
    echo 'Error en la eliminación';
    ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <title>ELIMINAR</title>
  </head>
  <body>
    <a class="btn btn-warning" href="index.php">Regresar a la Tabla</a>
  </body>
</html>

<?php
}
?>
