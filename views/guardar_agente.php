<?php
include ('../class/config.php');
$Foto = addslashes(file_get_contents($_FILES['Foto']['tmp_name']));
$Nombre = $_POST['Nombre'];
$Cargo = $_POST['Cargo'];
$Telefono = $_POST['Telefono'];
$Propiedades = $_POST['Propiedades'];

$query = "INSERT INTO agentes (Nombre,Cargo,Telefono,Propiedades,Foto) VALUES('$Nombre','$Cargo','$Telefono','$Propiedades','$Foto')";
$resultado = $con->query($query);


    if ($resultado) {
        echo "<h3><strong>SE HA INSERTADO CORRECTAMENTE</strong></h3>";
    }else{
        echo "<h3><strong>no se inserto</strong></h3>";
    }

?>
