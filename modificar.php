<?php

  include('./conexion.php');

  $idempleado=$_REQUEST['idempleado'];
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $dni=$_POST['dni'];
  $celular=$_POST['celular'];
  $direccion=$_POST['direccion'];
  $email=$_POST['email'];

  $query="UPDATE empleados SET nombre='$nombre',apellido='$apellido',dni='$dni',celular='$celular',direccion='$direccion',email='$email' WHERE idempleado='$idempleado'";

  $resultado = $conexion->query($query);

  if ($query) {
    header('Location: index.php');
  }else {
    header('Location: form_modificar.php');
  }

 ?>
