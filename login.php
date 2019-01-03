<?php

  session_start();

  $usuario=$_POST['usuario'];
  $password=$_POST['password'];

  include('./conexion.php');

  $query="SELECT * FROM login WHERE usuario='$usuario' AND password='$password'";

  $proceso= $conexion->query($query);

  if ($resultado = mysqli_fetch_array($proceso)) {
    $_SESSION['u_usuario']=$usuario;
    header('Location: index.php');
  }else {
    header('Location: form_login.php');
  }

 ?>
