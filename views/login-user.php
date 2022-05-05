<?php

include('../class/config.php');

$Email=$_POST['Email'];
$Contraseña=$_POST['Contraseña'];


$consulta="SELECT * FROM usuarios where Email= '$Email' and Contraseña = '$Contraseña'";
$resultado= mysqli_query($con, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    session_start();
     header("location:../views/user.php");
     die();
     $_SESSION['Email']=$filas;

}else{
    include("../views/admin_login.php");
    ?>
    <div style="margin-top:-58em; margin-left:29.8em; position:absolute;" class="animate__animated animate__bounceInRight alert alert-warning" role="alert">
        <h1>ERROR DE AUTENTIFICACION</h1>
    </div>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($con);





?>

<?php

 ?>