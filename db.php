<?php
$host = getenv('DB_HOST');
$dbname = getenv('DB_NAME');
$user = getenv('USERNAME');
$password = getenv('PASSWORD');
$conexion=mysqli_connect($host,$user,$password,$dbname);
?>