<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicie Sesion</title>
</head>
<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<script type="text/javascript" src="js/Carrusel.js"></script>
<script src="../js/MapsGoogle.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=ESCRIBE_AQUI_TU_API_KEY&callback=initMap">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
        <!--Style-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
        <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--CDN-->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../js/ocultardiv.js"></script>
<body oncopy="return false">
<img style="position:relative; width:100%; max-height:45em" src="../assets/img/IMG-22.jpg" alt="Negocio">
 
    <form style="box-shadow: 0px 0px 5px 1px black;position:absolute;margin-top:-38em; margin-left:65em" class="form-group animate__animated animate__bounceInDown" action="login-user.php" method="POST">
        <div style="border-top-right-radius:10px;border-bottom-right-radius:10px;position:absolute; margin-top:1em; margin-left: 2em; padding-top:1em; padding-bottom:1em; padding-left:2em; padding-right:2em; background-color:white; ">
            <h2 class="text-center"><strong>Welcome !</strong></h2>
                <i style="margin-bottom:0.2em" class="em em-mailbox_with_mail" aria-role="presentation" aria-label="OPEN MAILBOX WITH RAISED FLAG"></i>
                <input type="text" style="width:20em; height:3em" required="Debe colocar el Usuario" class="form-control" name="Email" id="Email" placeholder="E-Mail">
                <br>
                <div>
                <i for="Contraseña" style="margin-bottom:0.2em" class="em em-lock" aria-role="presentation" aria-label="LOCK"></i>
                <input type="password" style="width:20em; height:3em" required="Debe de colocar su password" class="form-control" name="Contraseña" id="Contraseña" placeholder=" Contraseña">
                </div>
                <br>

                <br>
                <button type="submit" class="btn rounded-pill btn-outline-primary">Entrar</button>
                <br><br>
                <p>Aun no tienes una cuenta?</p>
                <button  style="margin-left:-0.8em;margin-top:-1em; padding-bottom:1.4em" onclick="mostrarRegistro();" class="btn btn-link">Haz click aqui para crear una.</button>

            </div>
    </form>



    <div class="animate__animated animate__bounceInRight" style="display:none;position:fixed;background-color:white;border-radius:10px;padding-top:3em;padding-bottom:2em;padding-left:5.5em;padding-right:5.5em;margin-top:-38em;margin-left:67.25em;margin-right:10em;" id="registro">
    <button onclick="ocultarRegistro();" style="position:absolute;margin-left:20em;margin-top:-2em;"class="boton-rojito btn  rounded-circle bg-danger text-white">X</button>
                <form class="form-group" action="../class/crearusuario.php" method="POST">
                    <h2><strong> Registre su cuenta</strong></h2>
                    <label for="Nombre"><strong>Nombre</strong></label><br>
                    <input Required placeholder="Ingrese su Nombre" class="form-control" type="text" id="Nombre" name="Nombre">
                    <label for="Apellido"><strong>Apellido</strong></label><br>
                    <input Required placeholder="Ingrese su apellido" class="form-control" type="text" id="Apellido" name="Apellido">
                    <label for="Email"><strong>E-mail</strong></label><br>
                    <input Required placeholder="Ingrese su Correo Electronico" class="form-control" type="text" id="Email" name="Email">
                    <label for="Telefono"><strong>Telefono</strong></label><br>
                    <input Required placeholder="Ingrese su numero Telefonico" class="form-control" type="text" id="Telefono" name="Telefono">
                    <label for="Password"><strong>Contraseña</strong></label><br>
                    <input Required placeholder="Ingrese su contraseña" class="form-control" type="password" id="Password" name="Password">
                    <br>
                    <button type="submit" class="btn rounded-pill btn-outline-success"> Registrar [-></button>
                </form>
            </div>
            <div class="animate__animated animate__bounceInDown" style="position:absolute;   margin-top:-37em; margin-left:30em">
        <img style="border-top-left-radius:10px;border-bottom-left-radius:10px;max-height:27.6em;width:100%em" src="../assets/img/Propiedades/COSMOSIMG.jpg" alt="Edificios">
    </div>

    <!--Footer-->
<div style="margin-top:-3.5em; position:absolute"  class="imglogo">
        <div class="footer2">
            <img src="../assets/img/download.png" style="margin-left:5em; margin-top:-4em;margin-bottom:-3em;" width="30%" alt="Logo">
           <p style="font-size:16px;margin-top:3em; margin-right:20em"> Nuestro equipo esta entrenado con amplios
            conocimientos de las actuales tendencias<br> del
            mercado inmobiliario, de las prácticas de
            bienes raíces en la República Dominicana, <br>así
            como de las leyes y regulaciones que la rigen.</p>
        </div>

        <div class="vline" style="padding-left:1em;position:absolute; color:white; margin-top:-16em; margin-left:-10em; margin-right:30em; ">
        <p style="padding-bottom:-10cm; font-size:2em"><strong>Contacto</strong></p>
        <p style="margin-bottom:-0.3em;padding-bottom:-10cm">Nuestra Oficina</p>
        <p style="padding-bottom:-10cm">Av. Roberto Pastoriza,
        Esq. Manuel De Jesus <br> Troncoso
        Torre Da Vinci #420, Piso 8</p>
        <p style="margin-bottom:-0.3em;padding-bottom:-10cm; font-size:1em"><strong>Llamanos</strong></p>
        <p style="padding-bottom:-10cm">(809) 475-6318</p>
        <p style="margin-bottom:-0.3em;padding-bottom:-10cm; font-size:1em"><strong>Correo Electronico</strong></p>
        <p style="padding-bottom:-10cm">info@ofertainmobiliariard.com</p>
        
        </div>
        <div class="vline" style="padding-left:1em; position:absolute; color:white; margin-top:-16em; margin-left:20em; margin-right:2em; ">
        <p style="padding-bottom:-10cm; font-size:2em"><strong>¿Qué buscas?</strong></p>
        <p style="padding-bottom:-10cm"><i class="bi bi-caret-right"></i>Inversión</p>
        <p style="padding-bottom:-10cm"><i class="bi bi-caret-right"></i>Luxury</p>
        <p style="padding-bottom:-10cm"><i class="bi bi-caret-right"></i>Turísticos</p>
        <p style="padding-bottom:-10cm"><i class="bi bi-caret-right"></i>Bono Vivienda</p>
        </div>
        </div>
</body>
</html>