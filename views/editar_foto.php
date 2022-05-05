<?php
include ('../class/config.php');
$Foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
$Nombre = $_POST['Nombre'];
$Localizacion = $_POST['Localizacion'];
$Precio = $_POST['Precio'];
$Habitaciones = $_POST['Habitaciones'];
$Distribucion = $_POST['Distribucion'];
$Cantidad = $_POST['Cantidad'];

$query = "UPDATE propiedades SET imagen='$Foto',nombre='$Nombre',localizacion='$Localizacion',precio='$Precio',habitaciones='$Habitaciones',distribucion='$Distribucion',cantidad='$Cantidad' WHERE nombre='$Nombre'";
$resultado = $con->query($query);


    if ($resultado) {
        echo "$Nombre.<h3><strong> SE HA MODIFICADO CORRECTAMENTE</strong></h3>";
    }else{
        echo "$Nombre.<h3><strong> NO SE PUDO MODIFICAR</strong></h3>";
    }

?>
