<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;

try{
  $conexion=mysqli_connect("localhost","root","","db_login");

  $consulta="SELECT*FROM USERS where USERNAME='$usuario' and PASSWORD='$contraseña'";
  $resultado=mysqli_query($conexion,$consulta);

  $filas=mysqli_num_rows($resultado);

  if($filas){
      header("location:home.php");
  }else{
      ?>
      <?php
      include("index.html");

    ?>
    <h1 class="bad">Datos Incorrectos, Verif&iacute;calos Por Favor</h1>
    <?php
  }
}catch(Exception $e){
  echo 'Message: ' .$e->getMessage();
}finally{
  echo 'holision';
  mysqli_free_result($resultado);
  mysqli_close($conexion);
}

