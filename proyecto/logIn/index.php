<?php
    $conexion=mysqli_connect("localhost", "root", "", "pollito");
?>
    <?php

session_start();
if(!empty($_POST['ini_sesion'])){

    $Correo=$_POST['NombreIniciar'];
    $Contraseña=$_POST['Contraseña'];


    $consulta1= "SELECT COUNT(*) as contar FROM inicio WHERE NombreIniciar'='$Correo' AND Contraseña='$Contraseña' ";
    $consulta2 = mysqli_query($conexion, $consulta1);
    $consulta3=mysqli_fetch_array($consulta2);

    if($consulta3['contar']>0){
        echo '<script language="javascript">alert("Bienvenido señor usuario :3 ");window.location.href="elements.html"</script>';


    }else{
        echo '<script language="javascript">alert("No te encuentras registrado :(");window.location.href="elements.html"</script>';
}
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Formulario Registro</title>
</head>
<body>
  <form  class="form-register" >
    <h4> Log In </h4> 
    <input  action="conexion.php" type="text" class="controls" name="NombreIniciar" placeholder="Ingrese su usuario o su correo electronico" >
    <input  type="password" class="controls"name="Contraseña"  placeholder="Ingrese su Contraseña" >
    <!-- <p> <a href="#"> Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p> -->
    <input class="botons" type="submit" name="ini_sesion" value="iniciar sesion">
    <p><a href="#">¿no te has registrado?</a></p>
</form>

</body>
</html>
s