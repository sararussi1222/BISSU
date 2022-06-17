<?php
 
$host = "localhost"; 
$user = "root";
$password = "";
$bd = "index1";

 $conexion = mysqli_connect($host, $user, $password, $bd )
 or die ('La conexion falló : ' . mysqli_error());

 mysqli_select_bd($link, $bd);

 $name=$_POST['name'];
 $email=$_POST['email'];
 $message=$_POST['message'];

 $sql="INSERT INTO usuario values ('$name', '$email', '$message')";

 $result=mysqli_query($conexion, $sql);

 /*if ($result) {
    echo 'registro correcto'
 } else {
    echo 'registro fallido'
 }
 */
 


?>

