<?php
$inc=include ('../class/config.php');
if ($inc) {
    $consulta = "SELECT * FROM agentes";
    $resultado= mysqli_query($con,$consulta);
    if ($resultado) {
        while($row = $resultado->fetch_array()){
            $Nombre = $row['Nombre'];
            $Cargo = $row['Cargo'];
            $Telefono = $row['Telefono'];
            $Propiedades = $row['Propiedades'];
            $Foto = $row['Foto'];
            ?>



<div class="imagenes_asesores2">
            <img src="../assets/img/asesores/test5.jpg" alt="asesor" style="border-radius:50%;width:100%;">
            <p style="text-align:center;color:#0024A4"><strong><?php echo $Nombre?></strong></p>
            <p style="text-align:center;color:#505050; margin-top:-1.2em"><strong><?php echo $Cargo?> </strong></p>
            <button style="margin-top:-1.2em;" class="btn btn-outline-success"><i class="bi bi-whatsapp"></i> <a style="text-decoration:none;color:green"href="https://api.whatsapp.com/send/?phone=18095555555&text&app_absent=0"><?php echo $Telefono?> </a></button>
            <button style="margin-top:0.5em;" class="btn btn-primary"><i class="bi bi-person-video2"></i> <a style="text-decoration:none;color:white"href="">Ver Agente</a></button>
            </div>
            <br>
<?php
        }
    }
}

?>