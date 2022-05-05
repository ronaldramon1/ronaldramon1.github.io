<?php
include ('../class/config.php');
$Foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
$Nombre = $_POST['Nombre'];
$Localizacion = $_POST['Localizacion'];
$Precio = $_POST['Precio'];
$Habitaciones = $_POST['Habitaciones'];
$Distribucion = $_POST['Distribucion'];
$Cantidad = $_POST['Cantidad'];

$query = "INSERT INTO propiedades(imagen,nombre,localizacion,precio,habitaciones,distribucion,cantidad) VALUES('$Foto','$Nombre','$Localizacion','$Precio','$Habitaciones','$Distribucion','$Cantidad')";
$resultado = $con->query($query);


    if ($resultado) {
        echo "<h3><strong>SE HA INSERTADO CORRECTAMENTE</strong></h3>";
    }else{
        echo "<h3><strong>no se inserto</strong></h3>";
    }

?>
