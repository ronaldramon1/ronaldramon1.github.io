<?php
include ('config.php');
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Email = $_POST['Email'];
$Telefono = $_POST['Telefono'];
$Contraseña = $_POST['Password'];

$query = "INSERT INTO usuarios (Nombre,Apellido,Email,Telefono,Contraseña) VALUES ('$Nombre','$Apellido','$Email','$Telefono','$Contraseña')";
$resultado = $con->query($query);


    if ($resultado) {
        echo "<h3 style=\"background-color:#4BB6F9; padding-top:1em; padding-bottom:1em; padding-left:1em; border-radius:10px;border-style:solid; padding-right:1em; margin-top:15em; margin-left:30em;margin-right:30em;font-family:sans-serif;text-align:center\"><strong>SE HA INSERTADO CORRECTAMENTE</strong></h3>";
        header("location:../index.php");
    }else{
        "<h3 style=\"background-color:#4BB6F9; padding-top:1em; padding-bottom:1em; padding-left:1em; border-radius:10px;border-style:solid; padding-right:1em; margin-top:15em; margin-left:30em;margin-right:30em;font-family:sans-serif;text-align:center\"><strong>NO SE HA PODIDO INSERTAR CORRECTAMENTE</strong></h3>";
    }

?>
