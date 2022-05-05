<?php
include ('../class/config.php');
$Nombre = $_POST['Nombre'];
$query = "DELETE FROM agentes WHERE Nombre= '$Nombre'";
$resultado = $con->query($query);

if ($resultado) {
    echo $Nombre."<h3> <strong>SE HA ELIMINADO CORRECTAMENTE</strong></h3>";
}else{
    echo $Nombre."<h3><strong> NO SE PUDO ELIMINAR</strong></h3>";
}

?>