<?php
include ('../class/config.php');
$Foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
$Nombre = $_POST['Nombre'];
$Cargo = $_POST['Cargo'];
$Telefono = $_POST['Telefono'];
$Propiedades = $_POST['Propiedades'];

$query = "UPDATE agente SET Foto='$Foto',Nombre='$Nombre',Cargo='$Cargo',Telefono='$Telefono',Propiedades='$Propiedades' WHERE Nombre='$Nombre'";
$resultado = $con->query($query);


    if ($resultado) {
        echo "$Nombre.<h3><strong> SE HA MODIFICADO CORRECTAMENTE</strong></h3>";
    }else{
        echo "$Nombre.<h3><strong> NO SE PUDO MODIFICAR</strong></h3>";
    }

?>
