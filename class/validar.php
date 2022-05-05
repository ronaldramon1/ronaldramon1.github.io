<?php

include('config.php');

$username=$_POST['username'];
$password=$_POST['password'];


$consulta="SELECT * FROM admins where username= '$username' and password = '$password'";
$resultado= mysqli_query($con, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    session_start();
     header("location:../views/admin.php");
     die();
     $_SESSION['username']=$filas;

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