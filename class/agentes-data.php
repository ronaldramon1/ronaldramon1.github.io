<?php
include ('config.php');


if(isset($_POST[''])){
    if (strlen($_POST['Nombre'])< 1 && strlen($_POST['Cargo'])< 1 && strlen($_POST['Telefono'])< 1 && strlen($_POST['Propiedades'])< 1 &&strlen($_FILES['Foto'])< 1){
        $Nombre=trim($_POST[Nombre]);
        $Cargo=trim($_POST[Cargo]);
        $Telefono=trim($_POST[Telefono]);
        $Propiedades=trim($_POST[Propiedades]);
        $Foto=trim($_FILES[Foto]);
        $consulta="INSERT INTO agentes'(Nombre,Cargo,Telefono,Propiedades,Foto) VALUES ('$Nombre','$Cargo','$Telefono','$Propiedades','$Foto')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3>Te has inscrito correctamente!</h3>
            <?php
        }else{
            ?>
            <h3>Ups! Ha ocurrido un error.</h3>
            <?php
        }
        }else {
            ?>
            <h3>Por Favor complete los campos!</h3>
            <?php
        }
    }


?>