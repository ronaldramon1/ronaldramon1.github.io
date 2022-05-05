<?php
include ('../class/agentes-data.php');
include ('../class/config.php');
?>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">
    <link rel="stylesheet" href="../css/style.css">
        <!--Style-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
        <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--CDN-->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../js/ocultardiv.js"></script>
</head>
<body>
    <div>
        <nav class="bg-transparent navbar navbar-expand-lg " style="position:relative; color: white;">     
                <div class="container-fluid">
                    <a href="#" class="navbar-brand"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collaps">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            
    <title>Administrar Agentes</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<script type="text/javascript" src="js/Carrusel.js"></script>
<script src="../js/MapsGoogle.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=ESCRIBE_AQUI_TU_API_KEY&callback=initMap"></script>
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
    <script src="carusel.js"></script>

<img src="../assets/img/download2.png" alt="OfertaInmobiliaria" style="width:10%;">
                            <div style="margin-left:56em">
                            <a href="admin-propiedades.php" class="boton-grande btn btn-lg btn-outline-primary  margenes_link" ><strong><i class="bi bi-house-fill"></i> Propiedades</strong></a>
                            <a href="admin-agentes.php" class="boton-grande btn btn-lg btn-outline-primary  margenes_link" ><strong><i class="bi bi-person-fill"></i> Agentes</strong></a>
                            <a href="../index.php" class="boton-grande btn btn-lg bg-transparent margenes_link" aria-current="page" ><strong>Salir</strong></a>
                        </div>
                        </div>                        
                    </div>
                </div>
        </nav>
    </div>
 
    </div>
  </nav>
</div>
                    </head>

<!--Imagen oscura-->
<div class="img4">
    <div class="oscuro-superior">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <h2 class="animate__animated animate__rubberBand div-abajo text-white text-center">
                            <strong>Administrar Agentes</strong>
                        </h2>
                        <hr class="hr4">
                        <br>
                        <button class="btn  btn-danger btn-lg" onclick="mostrarEliminar();">Eliminar</button><br><br>
                        <button class="btn  btn-info btn-lg" onclick="mostrarCrear();">Crear</button><br><br>
                    </div>
                    <div id="pulsaunboton">
                        <h2 style="background-color:white; border-radius:10px; padding-top:2em;padding-bottom:2em;padding-left:1em;padding-right:1em;position:relative; margin-right:7.2em;margin-left:18em; margin-top:-10em"><strong>Pulsa un boton para iniciar</strong></h2>
                    </div>
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-1">

                    </div>
                    <div class="col-sm-5">
                    <div style="display:none;" id="crear" class="animate__animated animate__fadeInRightBig  bg-info">
                            <form enctype="multipart/form-data" style="border-radius:10em;padding-left: 2em;padding-right: 3em;margin-top:2em;padding-bottom: 2em;padding-top: 2em;"class="div-non-color" action="guardar_agente.php" method="post">
                                <h3><strong>Crear Agente</strong></h3>
                                <label for="Nombre" class="label2"><strong>Nombre</strong></label><br>
                                <input class="form-control" type="text" placeholder="Ingrese su nombre" id="Nombre"  name="Nombre" required="Ingrese su Nombre">
                                <label for="Cargo" class="label2"><strong>Cargo:</strong></label><br>
                                <input class="form-control" type="text" placeholder="Ingrese su cargo" id="Cargo"  name="Cargo" required="Ingrese su Cargo">
                                <label for="Telefono" class="label2"><strong>Telefono:</strong></label><br>
                                <input class="form-control" type="text" placeholder="Ingrese su numero telefonico" id="Telefono"  name="Telefono" required="Ingrese su Telefono">
                                <label for="Propiedades" class="label2"><strong>Propiedades</strong></label><br>
                                <input class="form-control" type="text" placeholder="Ingrese alguna Propiedad" id="Propiedades"  name="Propiedades" required="Ingrese alguna propiedad">
                                <label for="Foto" class="label2"><strong>Foto</strong></label>
                                <input class="form-control" accept="image/*" type="file" placeholder="Suba su foto" id="Foto"  name="Foto" required="Ingrese su Foto">
                                <br>
                                <input type="submit" name="crear" id="crear" class="btn btn2 btn-block bg-white " placeholder="Crear">
                            </form>
                        </div>
                        <div style="display:none;" id="eliminar" class="animate__animated animate__fadeInRightBig  bg-danger">
                            <form action="eliminar_agente.php" style="color:white;margin-top:2em;border-radius:10em;padding-left: 2em;padding-right: 3em;padding-bottom: 2em;padding-top: 2em;"class="div-non-color" method="POST">
                                <h3><strong>Eliminar Agente</strong></h3>
                                <label for="Nombre" class="label2"><strong>Nombre:</strong></label><br>
                                <input class="form-control" type="text" placeholder="Ingrese el agente a eliminar" id="Nombre"  name="Nombre" required="Ingrese su Nombre">

                                <br>
                                <input type="submit" name="eliminar" id="eliminar" class="btn btn2 btn-block btn btn-block bg-white" placeholder="Eliminar">
                            </form>
                        </div>
                        <div style="display:none;" id="editar" class="animate__animated animate__fadeInRightBig  bg-warning">
                            <form action="editar_agente.php" style="border-radius:10em;margin-top:2em;padding-left: 2em;padding-right: 3em;padding-bottom: 2em;padding-top: 2em;"class="div-non-color" method="POST">
                                <h3><strong>Editar Agente</strong></h3>
                                <label for="Nombre" class="label2"><strong>Nombre</strong></label><br>
                                <input class="form-control" type="text" placeholder="Ingrese su nombre" id="Nombre"  name="Nombre" required="Ingrese su Nombre">
                                <label for="Cargo" class="label2"><strong>Cargo:</strong></label><br>
                                <input class="form-control" type="text" placeholder="Ingrese su cargo" id="Cargo"  name="Cargo" required="Ingrese su Cargo">
                                <label for="Telefono" class="label2"><strong>Telefono:</strong></label><br>
                                <input class="form-control" type="text" placeholder="Ingrese su numero telefonico" id="Telefono"  name="Telefono" required="Ingrese su Telefono">
                                <label for="Propiedades" class="label2"><strong>Propiedades</strong></label><br>
                                <input class="form-control" type="text" placeholder="Ingrese alguna Propiedad" id="Propiedades"  name="Propiedades" required="Ingrese alguna propiedad">
                                <label for="Foto" class="label2"><strong>Foto</strong></label>
                                <input class="form-control" accept="image/*" type="file" placeholder="Suba su foto" id="Foto"  name="Foto" required="Ingrese su Foto">
                                <br>
                                <input type="submit" name="editar" id="editar" class="btn btn2 btn-block bg-white" placeholder="Editar">
                            </form>
                        </div>
                    </div>
</div>
</div>
</div>
</div>
</div>
<!--Footer-->
<div style="margin-top:-9em; position:absolute"  class="imglogo">
        <div class="footer2">
            <img src="../assets/img/download.png" style="margin-left:5em; margin-top:-4em;margin-bottom:-3em;" width="30%" alt="Logo">
           <p style="font-size:16px;margin-top:3em; margin-right:20em"> Nuestro equipo esta entrenado con amplios
            conocimientos de las actuales tendencias del
            mercado inmobiliario, de las prácticas de
            bienes raíces en la República Dominicana, así
            como de las leyes y regulaciones que la rigen.</p>
        </div>
        <div class="vline" style="padding-left:1em;position:absolute; color:white; margin-top:-16em; margin-left:-10em; margin-right:30em; ">
        <p style="padding-bottom:-10cm; font-size:2em"><strong>Contacto</strong></p>
        <p style="margin-bottom:-0.3em;padding-bottom:-10cm">Nuestra Oficina</p>
        <p style="padding-bottom:-10cm">Av. Roberto Pastoriza,
        Esq. Manuel De Jesus Troncoso
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

<!--
