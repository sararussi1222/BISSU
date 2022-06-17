<?php
$conexion=mysqli_connect('localhost','root','','pollito');

conexiones($conexion);

function conexiones($conexion){
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Us_Name = $_POST['us_name'];
    $Correo = $_POST['Correo'];
    $Contraseña = $_POST['Contraseña'];
    $consulta = "INSERT INTO inicio(Nombre,Apellido,Correo,Contraseña)
    VALUES('$Nombre','$Apellido','$Us_Name','$Correo','$Contraseña')";
mysqli_query($conexion,$consulta);
mysqli_close($conexion);
if($conexion){
    echo"<h2><center>sus datos han sido exitosamente diligenciados</h2>";
}
}
?>