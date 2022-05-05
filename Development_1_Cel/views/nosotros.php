<script>
function redcontactos(){
    setTimeout( function() { window.location.href = "contacto.php"; }, 0 );
    }
    
    
addEventListener('DOMContentLoaded', () => {
  
  const botonMVV = document.querySelector('#botonMVV')
  const obtener_pixeles_inicio = () => document.documentElement.ScrollTop || document.body.scrollTop;
  
  const moverMVV = () => {
    if (obtener_pixeles_inicio() > 0)  {
      scrollTo(500,600)
    }
  }

  botonMVV.addEventListener('click', moverMVV)
  })
  
</script>
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="https://kit.fontawesome.com/d860dfcff7.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<script type="text/javascript" src="js/Carrusel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://kit.fontawesome.com/52979c0775.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script type="text/javascript" src="../js/scripts.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/redirecciona.js"></script>
<script src="http://code.jquery.com/jquery-lastest.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
</head>
<body>
    <div style="background-color:#2B2B2B; width:100%; padding:7% 2% 3% 5%">
        <img class="logo-Navbar" style="width: 35%;"  src="../assets/img/LogoHorizontal.png" alt="Logo">
    </div>
    <button id="desplegable" onclick="mostrarNavbar();" style="z-index:10;margin-top:-13.5%;margin-left:80%" class="button-desplegable btn btn-secondary"><span class="bi bi-list"></span></button>
    <nav style="position:fixed;z-index:999">


<div  style="margin-right:-160%;background-color:#122944ec;padding:150% 83% 190% 0%;margin-top:-70%">
    <ul style="list-style:none; text-decoration:none;display:none;" class="animate__animated animate__fadeInRight"  id="navbar">
        <button id="encogedor" onclick="ocultarNavbar();" style="z-index:10;margin-top:-13.5%;margin-left:80%" class="button-desplegable btn btn-secondary"><span class="bi bi-x-circle"></span></button>
        <li><a style="color:white" href="../index.php">INICIO</a><br><hr></li>
        <li><a style="color:white"href="https://www.ofertainmobiliariard.com/propiedades?listing_type=1&page=1&currency=RD">PROPIEDADES</a><br><hr></li>
        <li><a style="color:white"href="https://www.ofertainmobiliariard.com/agentes">AGENTES</a><br><hr></li>
        <li><a style="color:white"href="nosotros.php">NOSOTROS</a><br><hr></li>
        <li><a style="color:white"href="contacto.php">CONTACTO</a><br><hr></li>
    </ul>
</div>
    </nav>
  </div>
  <div style="background-image:url(../assets/img/business.jpg); width:100%;height:12em; background-size:100% 10em, cover;z-index:-1;background-repeat: no-repeat;"></div>
  <div class="Poppins" style="background-color:#d5740c7c; width:100%;height:10em; position:absolute;z-index:1; margin-top:-12em">
    <img src="../assets/img/Jael.png" style="max-height:140%; width:35%;object-fit:cover;z-index:2;position:absolute;margin-top:0%;margin-left:23%" alt="">
    <img src="../assets/img/GisselleFP.png" style="max-height:140%; width:35%;object-fit:cover;z-index:2;position:absolute;margin-top:0.5%;margin-left:43%"  alt="">
 </div>
 <div class="text-center" style="position:absolute;background-color:#2B2B2B; margin-top:-15%;width:90%; height:16%; border-radius:5px; margin-left:5%;z-index:3;">
 <h5 style="color:white;font-family:Poppins;text-align:Justify;font-weight:300;padding:4% 4% 2% 4%">
    Somos uno de los principales referentes al momento de necesitar una asesoría especializada para comprar o invertir en bienes raíces en la República Dominicana.
    </h5>


</div>
<div class="container-md" style=" font-family:Poppins;margin:1% 4% 0% 4% ;margin-top:20%">


    <h3 class="text-center">Historia</h3>
    <h5 style="text-align:Justify;font-weight:300">Somos una agencia de bienes raíces dedicada a la venta de propiedades inmobiliarias en República Dominicana. Hemos ayudado y guiado a cientos de personas a idealizar y lograr sus objetivos de inversión en Punta Cana y otros destinos del país.</h5>
    <br>

    <div class="row">
        <div class="col-md-12 text-center">
        <div class="text-center" style="box-shadow: 0px 10px 20px  rgb(128, 128, 128,0.2);border-radius:10px;padding:6em 1.5em 2.5em 1.5em">
        <div class="" style="margin-top:-19%">
            <i class="color:black fa-solid fa-building" style=" font-size: 5em; padding:5% 3% 5% "></i>
            </div>
                <h3  style="font-family:Poppins;color:black;">Misión</h3>
                <p class="lowerest" style="color:black;font-size:100%; text-align:justify">La empresa fue fundada en el año 2019 con la misión de otorgar un servicio basado en la calidad y en el acompañamiento de nuestros clientes mediante una asesoría cualificada, fomentada en la realización  constantemente de análisis económicos y de mercado que nos permitan ofrecer los proyectos inmobiliarios con mejores ventajas competitivas en cuanto a propuestas, precios, ubicación, diseño y calidad de construcción, para que la experiencia de compra sea siempre más que satisfactoria. </p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="col-md-12 text-center">
        <div class="text-center" style="box-shadow: 0px 10px 20px  rgb(128, 128, 128,0.2);border-radius:10px;padding:6em 1.5em 2.5em 1.5em">
        <div class="" style="margin-top:-19%">
            <i class="color:black fa-solid fa-user-tie" style=" font-size: 5em; padding:5% 3% 5% "></i>
            </div>
                <h3  style="font-family:Poppins;color:black;">Visión</h3>
                <p class="lowerest" style="color:black;font-size:100%; text-align:justify">Ser el principal referente al momento de necesitar una asesoría especializada para comprar o invertir en bienes raíces dentro del territorio dominicano. 

<br><br><br>Innovación 
<br>Transparencia
<br>Profesionalidad
<br>Compromiso</p> </p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="col-md-12 text-center">
            <div class="text-center" style="box-shadow: 0px 10px 20px  rgb(128, 128, 128,0.2);border-radius:10px;padding:6em 1.5em 2.5em 1.5em">
            <div class="" style="margin-top:-19%">
            <i class="color:black fa-solid fa-font-awesome" style=" font-size: 5em; padding:5% 3% 5% "></i>
            </div>
                <h3  style="font-family:Poppins;color:black;">Valores</h3>
                <p class="lowerest" style="color:black;font-size:100%; text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
            </div>
        </div>
    </div>
</div>
</div><!--Row-->
<div class="row">
                <div class="col-md-12 text-center " style="margin-bottom:2em;font-family:Poppins;margin-bottom:2em">
                <h2 class="text-center" style="font-family:Poppins;  font-weight:500;font-size:3.7em; "><strong>Equipo</strong></h2>
                <p style="margin-left:15%; margin-right:15%;"> Pensamos en las necesidades de nuestros usuarios y cumplimos con cada una de ellas, para que su experiencia de compra sea siempre más que satisfactoria.</p>
                </div>
            </div>
    <div class="row text-center" style="margin-left:0%;margin-top">
        <div class="imagen-ases"><img src="../../Gisselle.png" style="margin-top:2%;border-radius: 50%;width: 30%;" alt=""></div>
        <div style="font-family:Poppins" class="imagen-ases"><h3 style="font-size:22px;">Gisselle Ventura</h3><p >Gerente Administrativa</p></div>
    </div>
    <div class="row text-center" style="margin-left:0%;margin-top">
        <div class="imagen-ases"><img src="../../Jael2.png" style="margin-top:2%;border-radius: 50%;width: 30%;" alt=""></div>
        <div style="font-family:Poppins" class="imagen-ases"><h3 style="font-size:22px;">Jael Ventura</h3><p >Gerente de Ventas</p></div>
    </div>
    <div class="row text-center" style="margin-left:0%;margin-top">
        <div class="imagen-ases"><img src="../../Josymil.png" style="margin-top:2%;border-radius: 50%;width: 30%;" alt=""></div>
        <div style="font-family:Poppins" class="imagen-ases"><h3 style="font-size:22px;">Josymil Sehouerer</h3><p >Gerente de División Luxury</p></div>
    </div>
    <div class="row text-center" style="margin-left:0%;margin-top">
        <div class="imagen-ases"><img src="../../Vikell.png" style="margin-top:2%;border-radius: 50%;width: 30%;" alt=""></div>
        <div style="font-family:Poppins" class="imagen-ases"><h3 style="font-size:22px;">Victor Dionicio</h3><p>Gerente Comercial</p></div>
    </div>
    <div class="row text-center" style="margin-left:0%;margin-top">
        <div class="imagen-ases"><img src="../../domingo.png" style="margin-top:2%;border-radius: 50%;width: 30%;" ></div>
        <div style="font-family:Poppins" class="imagen-ases"><h3 style="font-size:22px;">Domingo Piñeiro</h3><p>Gerente de Marketing</p></div>
    </div>


<div class="bg-dark" style="margin-top:10%; background-color:rgb(47, 47, 47);color:white; padding:2% 10% 10% 10%;text-align:justify; margin-left:-2.2%; margin-right:0%">
<img src="../assets/img/LogoHorizontal.png" style="width:90%;padding-top:3%;padding-left:6%;  padding-bottom:5%" alt="">
Nuestro equipo esta entrenado con amplios conocimientos de las actuales tendencias del mercado inmobiliario, de las prácticas de bienes raíces en la República Dominicana, así como de las leyes y regulaciones que la rigen.

<p style="padding-bottom:-10cm;padding-top:5em;padding-top:0.7em; font-size:2em; font-family:Poppins; font-weight:500">CONTACTO</p>
                <p style="margin-bottom:-0.3em;padding-bottom:-10cm;font-family:Poppins;"><i  class="h2 bi bi-geo-alt-fill"></i>Nuestra Oficina</p>
                <p style="margin-left:2.25em; padding-bottom:-10cm;font-family:Poppins;">Av. Roberto Pastoriza,
                Esq. Manuel De Jesus <br>Troncoso
                Torre Da Vinci #420, Piso 8</p>
                <p style="margin-bottom:-0.3em;padding-bottom:-10cm;font-family:Poppins;"><i class="h2 bi bi-geo-alt-fill"></i>Calle Cedro, Edificio Cedro 406 Punta<br><span style="margin-left:2.25em"> Cana Village<span></p>
                <p style="margin-bottom:-0.3em;padding-bottom:-10cm; color:white;font-size:1em;font-family:Poppins;"><i class="h2 bi bi-telephone-fill"></i> Llamanos</p>
                <p style="margin-left:2.30em;padding-bottom:-10cm;font-family:Poppins;">(809) 475-6318</p>
                <p style="margin-bottom:-0.3em;padding-bottom:-10cm; font-size:1em;font-family:Poppins;"><i class="h2 bi bi-envelope"></i>  Correo Electronico</p>
                <p style="margin-left:2.52em;padding-bottom:0cm;font-family:Poppins;">info@ofertainmobiliariard.com</p>

                <p style="padding-top:1em;  padding-bottom:-10cm; font-size:2em;font-family:Poppins; font-weight:500">¿QUÉ BUSCAS?</p>
       <a href="index.php"><p style="color:white;text-decoration:none;padding-bottom:-10cm;font-family:Poppins;"><i class="bi bi-caret-right"></i>INICIO</p></a>
       <a href="views/nosotros.php"><p style="color:white;text-decoration:none;padding-bottom:-10cm;font-family:Poppins;"><i class="bi bi-caret-right"></i>NOSOTROS</p></a>
       <a href="views/luxury.php"><p style="color:white;text-decoration:none;padding-bottom:-10cm;font-family:Poppins;"><i class="bi bi-caret-right"></i>LUXURY</p></a>
       <a href="views/contactos.php"><p style="color:white;text-decoration:none;padding-bottom:-10cm;font-family:Poppins;"><i class="bi bi-caret-right"></i>CONTACTOS</p></a>
       <a href="views/agentes.php"><p style="color:white;text-decoration:none;padding-bottom:-10cm;font-family:Poppins;"><i class="bi bi-caret-right"></i>AGENTES</p></a>
       <a href="views/propiedades.php"><p style="color:white;text-decoration:none;padding-bottom:-10cm;font-family:Poppins;"><i class="bi bi-caret-right"></i>PROPIEDADES</p></a>
       <hr style="width:105%;margin-top:10.5%; color:black; height:1px;border-color: rgb(62, 62, 62);">
        <p class="text-white" style=" color:white;margin-bottom:2em; ">2022 | Oferta Inmobiliaria RD. Todos los derechos reservados.</p>
    </div>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
</body>
</html>


<!--
            <h1 style="font-size:135%;color:white;font-weight:700;margin:3% 1% 1% 4%">¡Conoce más</h1>
        <h1 style="font-size:135%;color:white;font-weight:700;margin:-1% 1% 0% 4%">sobre nosotros!</h1>
        <h3 style="font-size:100%;color:white;font-weight:300; width:70%;margin-left:5%;margin-top:1%">Somos uno de los principales referentes al momento de necesitar una asesoría especializada para comprar o invertir en bienes raíces en la República Dominicana.</h3>