<style>
.Poppins-1{
    font-family: 'Poppins-1';
}

.Poppins-2{
    font-family: 'Poppins-2';
}

.swiper {
        width: 100%;
        height: 30%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 10%;
        object-fit: cover;
      }


@font-face {
    font-family: 'Poppins-1';
    src: url('fonts/Poppins-Light.ttf') format('truetype');
    font-style: normal;
    font-weight: normal;
  }


  .poppins-font{
    font-family:  'Poppins-1';
}

<?php
include('Views/top2.php')
?>

</style>

<script>
    
function redcontactos(){
    setTimeout( function() { window.location.href = "views/contacto.php"; }, 0 );
    }


    function redireccionarPantalla() {
  var moviles = "Development_1_Cel/index.php";

  
  // Aquí redireccionamos a web para dispositivos móviles
  // o a web normal dependiendo de la resolución 
  if ((screen.width < 600) && (screen.height < 800))
  window.location.href= moviles;
}    

</script>
<link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/style3.css">
	<!--Glider-->
	<link rel="stylesheet" type="text/css" href="css/glider.min.css">
    <title>Inicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/bttn.min.css">
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

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/redirecciona.js"></script>
<script src="http://code.jquery.com/jquery-lastest.js"></script>
<body onload="redireccionarPantalla()">
<div class="header1" style="background-color:#edf0f101">
    <img class="logo-Navbar"  src="assets/img/LogoHorizontal.png" style="width: 10%" alt="Logo">
    <nav>
        <ul class="nav_links" style="margin-left:17.5%;margin-right:-17.5%;">
            <li><a style="color:white" href="index.php">INICIO</a></li>
            <li><a style="color:white" href="https://www.ofertainmobiliariard.com/propiedades">PROPIEDADES</a></li>
            <li><a style="color:white" href="https://www.ofertainmobiliariard.com/agentes">AGENTES</a></li>
            <li><a style="color:white" href="views/nosotros.php">NOSOTROS</a></li>
            <li><a style="color:white" href="oirdluxury.com">LUXURY</a></li>
            <li><a style="color:white" href="views/contacto.php">CONTACTO</a></li>
            <li><a style="color:white" href="views/login.php"><i class="bi bi-arrow-right-square"></i> LOGIN</a></li>
        </ul>
    </nav>
  </div>

    <div style="margin-top:-8em">
<div>
    <div class="cover-home">
<div  style="z-index:-6;position:relative;">
<video style="z-index:-5; width:100%; height:auto; max-height:80em" class="video2" loop autoplay muted>
<source src="assets/video/cosmos.mp4" type="video/mp4">
</video>
</div>
</div>
</div>
<div class="container-md">
    <div class="row" >
        <div class="col-md-12 text-center" style="margin-top:-30em">
            <h5 class="lowerest text-center text-white">¿Buscas adquirir un inmueble?</h5>
            <h1 class="upercasse text-center text-white" style="text-transform: uppercase;font-size: 60px;font-weight: 500;font-family: Poppins;">encuentra tu lugar ideal <br>para invertir</h1>
                <div class="row">
                    <div class="col-md-12 text-center" style="Position:absolute;margin-top:0em;z-index:50">
                        <a href="https://www.ofertainmobiliariard.com/propiedades"><button class="button-white4">Explorar <i class=" icon-button bi bi-chevron-down"></i></button>
                        <a href="https://www.ofertainmobiliariard.com/propiedades"> <button class="button-white3">Ver Propiedades <i  class="icon-button bi bi-house-door-fill"></i></button></a>
                    </div>
                 </div>
             </div>
        </div>
</div>
<div class=" bg-white container" style="position:absolute; margin-top:10em" id="tapador"></div>
<div class=" bg-white container" style="position:absolute; margin-top:10em; margin-left:60em" id="tapador2"></div>
<div class="animate__animated animate__fadeInDown bg-white" style="margin-top:3em">
    <div class="bg-imagen1 bg-white">
    <div class="bg-white container-md  text-center"  style="margin-top:10em" >

    <div class="bg-white">
    <div class="container-md bg-white" >
        <br>
  <div class="row bg-white" style="margin-top:30px">
  <div class="bg-white col-md-1 "><p class="text-white">.</p></div>
    <div class=" col-sm-5 mg-left" >
    <div >
          <H3 class="Poppins mini mg-br bg-white letter-space">SOBRE NOSOTROS</H3>
    </div>
    <div class="Poppins mediumm mg-tp7 " >
    <h2 class="mediumm upercase2 " style="color:#1dbfe2;margin-top:10px">CONÓCENOS</h2> 
        <hr style="width:160px;">
    </div>
    <div class="Poppins mini bg-white"  >
Nuestro equipo esta entrenado con amplios conocimientos de las actuales tendencias del mercado inmobiliario, de las prácticas de bienes raíces en la República Dominicana, así como de las leyes y regulaciones que la rigen.


    </div>
    <div style="z-index:989" >
        <button style="margin-left:-20.5em; margin-top:2.5em" class="mg-tp button-white5" >MAS SOBRE NOSOTROS</button>
    </div>
    </div>

    <div class="col-sm-6">
    <img src="assets/img/Propiedades/foto-piscina1.jpeg" width="770" height="345">
    </div>
  </div>
</div>
    </div>




        </div>
    </div>


    <div>

    <div>
<section  style="border-style:none; background-image: url('assets/img/Propiedades/penthouse.jpg'); background-position:center; width:100%; background-attachment: fixed">
<div  style="background-color:rgba(0, 0, 0, 0.5); padding-top:1em; padding-bottom:1em; ">  
<h1 class="text-white upercase4 text-center">¿Por qué Invertir con nosotros?</h1>
<div class="row text-center mg-tp7">
<div class="col-md-2"></div>
<div class="col-md-2" ><div class="text-center text-white"><img src="assets/img/icons/sketch.png" style="width:90px;" alt=""><h4  class="mini2" style="margin-left:1.0em;width:270px;font-family:Poppins ;font-size:14px;font-weight:300" >Nuestros proyectos están diseñado para el disfrute y la seguridad que su familia merece, con una seguridad y exclusividad única.</h4></div></div>
<div class="col-md-2" ><div class="text-center text-white"><img src="assets/img/icons/people.png" style="width:90px;" alt=""><h4 class="mini2" style="margin-left:1.0em;width:270px;font-family:Poppins ;font-size:14px;font-weight:300"> Tenemos a la disposición un gran equipo de expertos altamente capacitado en otorgar un servicio basado en la calidad y en el acompañamiento de nuestros clientes.</h4></div></div>
<div class="col-md-2"><div class="text-center text-white"><img src="assets/img/icons/flag.png" style="width:90px;" alt=""><h4 class="mini2" style="margin-left:0.7em;width:270px;font-family:Poppins ;font-size:14px;font-weight:300">Pensamos en las necesidades de nuestros usuarios y cumplimos con cada una de ellas, para que su experiencia de compra sea siempre más que satisfactoria.</h4></div></div>
<div class="col-md-2"><div class="text-center text-white"><img src="assets/img/icons/hearts.png" style=" width:90px;" alt=""><h4 class="mini2" style="margin-left:1.0em;width:270px;font-family:Poppins ;font-size:14px;font-weight:300">Nuestro enfoque principal es el buen servicio y la satisfacción de nuestros clientes al momento de contactarnos.</h4></div></div>
<div class="col-md-2"></div>
</div>
<br>

</div>
</section>
</div>
</div>
    <div>
    <div class="mg-tp10 container-md" style="margin-top:4%;z-index:170">
  <div class="mg-bt10 row">
    <div class=" col-sm-12 TEXT-LEFT">
    <div style="margin-left:8px" class="Poppins mini mg-br letter-space">
          INTERESES COMERCIALES
    </div>
    <div class="mg-br Poppins mediumm">
       <h2 class="mediumm upercase2 " style="margin-top:10px">PROPIEDADES <span style="color:#1dbfe2">DISPONIBLES</span></h2> 
        <hr style="width:180px; height:1px;margin-top:-10px;margin-left:0em; color:black" >
    </div>
    <div class="bg-imagen1">
    <div class="container-md text-center">



     </div>
</div>


</div>
</div>
</div>
</div>
</div>
</div>

<div style="margin-left:17%;margin-right:8%; margin-top:15em">
    <!-- Swiper -->
    <div class="swiper mySwiper" style="margin-left:-5%;margin-right:5%">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <!--Tarjeta 1 -->
        <div class="card2 " style="padding: 2em 1em 2em 2em;background-image: url(assets/img/Propiedades/Blumarina2.jpg);background-size: cover;z-index: 22;height: 15em;width: 73%;border-radius:10px">
    <a target="_blank" href="https://www.ofertainmobiliariard.com/propiedad/1392-lujoso-proyecto-ubicado-en-la-prestigiosa-zona-de-la-marina-en-cap-cana-1392">
    <div class="content" style="text-align:left; color:white;text-decoration:none;margin-left:-1.5em;" >
            <div class="title" style="font-size: 20px;text-decoration:none;margin-top:50%;">EXCLUSIVO COMPLEJO <br>DE APARTAMENTOS</div>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight: 300;margin-top:0.5em;"><i class="fa-solid fa-bed"></i> 1 <i class="fa-solid fa-ruler"></i> 79.47 mts² <i class=" fa-solid fa-bath"></i> 2 baños</p>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight:300;margin-top:-1px">Desde<strong> US$ 236,499.00</strong></p>
            <div class="btn">

            </div>
        </div>


        </a>
        <div class="favorito" style="margin-left: 9em;margin-top:-14em;">
    <a target="_blank" href="https://api.whatsapp.com/send/?phone=18094756318&text&app_absent=0" ><i style="color:white" class="text-white h2 bi bi-heart"></i></a>
    </div>
    <div class="localizacion" style="margin-top:-14em;margin-left:-1em;">
    <p style="font-family:Poppins;font-size:12px;font-weight: 300;"><i class="fa-solid fa-location-dot"></i>Punta Cana</p>
    </div>
    </div>    
        </div>
        <div class="swiper-slide">
        <!--Tarjeta 2 -->
        <div class="card2 " style="padding: 2em 1em 2em 2em;background-image: url(assets/img/Propiedades/puntamajagua.jpeg);background-size: cover;z-index: 22;height: 15em;width: 73%;border-radius:10px">
    <a target="_blank" href="https://ofertainmobiliariard.com/propiedad/1453-175748-venta-villa-en-punta-majagua-1453?referer=1690">
    <div class="content" style="text-align:left; color:white;text-decoration:none;margin-left:-1.5em;" >
    <div class="title" style="font-size: 24px;text-decoration:none;margin-top:50%;">VILLA PUNTA<BR> MAJAGUA</div>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight: 300;margin-top:0.5em;"><i class="fa-solid fa-bed"></i> 6 <i class="fa-solid fa-ruler"></i> 3,723.00 mts² <i class=" fa-solid fa-bath"></i> 6 baños</p>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight:300;margin-top:-1px">Desde<strong> US$ 4,900,000.00</strong></p>
            <div class="btn">

            </div>
        </div>


        </a>
        <div class="favorito" style="margin-left: 9em;margin-top:-14em;">
    <a target="_blank" href="https://api.whatsapp.com/send/?phone=18094756318&text&app_absent=0" ><i style="color:white" class="text-white h2 bi bi-heart"></i></a>
    </div>
    <div class="localizacion" style="margin-top:-14em;margin-left:-1em;">
    <p style="font-family:Poppins;font-size:12px;font-weight: 300;"><i class="fa-solid fa-location-dot"></i>Cap Cana</p>
    </div>
    </div>    
        </div>
        <div class="swiper-slide">
            <!--Tarjeta 3 -->
            <div class="card2 " style="padding: 2em 1em 2em 2em;background-image: url(assets/img/Propiedades/casa-juanillo.jpg);background-size: cover;z-index: 22;height: 15em;width: 73%;border-radius:10px">
    <a target="_blank" href="https://www.ofertainmobiliariard.com/propiedad/1392-lujoso-proyecto-ubicado-en-la-prestigiosa-zona-de-la-marina-en-cap-cana-1392">
    <div class="content" style="text-align:left; color:white;text-decoration:none;margin-left:-1.5em;" >
    <div class="title" style="font-size: 24px;text-decoration:none;margin-top:50%;">PROYECTO EN CASA JUANILLO</div>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight: 300;margin-top:0.5em;"><i class="fa-solid fa-bed"></i> 1 <i class="fa-solid fa-ruler"></i> 79.47 mts² <i class=" fa-solid fa-bath"></i> 2 baños</p>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight:300;margin-top:-1px">Desde<strong> US$ 236,499.00</strong></p>
            <div class="btn">

            </div>
        </div>


        </a>
        <div class="favorito" style="margin-left: 9em;margin-top:-14em;">
    <a target="_blank" href="https://api.whatsapp.com/send/?phone=18094756318&text&app_absent=0" ><i style="color:white" class="text-white h2 bi bi-heart"></i></a>
    </div>
    <div class="localizacion" style="margin-top:-14em;margin-left:-1em;">
    <p style="font-family:Poppins;font-size:12px;font-weight: 300;"><i class="fa-solid fa-location-dot"></i>Punta Cana</p>
    </div>
    </div>    
        </div>
        <div class="swiper-slide">
            <!--Tarjeta 4 -->
            <div class="card2 " style="padding: 2em 1em 2em 2em;background-image: url(assets/img/Propiedades/corte-familiar.jpeg);background-size: cover;z-index: 22;height: 15em;width: 73%;border-radius:10px">
    <a target="_blank" href="https://www.ofertainmobiliariard.com/propiedad/1016-proyecto-de-corte-familiar-con-la-mejor-distribucion-y-ubicacion-1016">
    <div class="content" style="text-align:left; color:white;text-decoration:none;margin-left:-1.5em;" >
    <div class="title" style="font-size: 24px;text-decoration:none;margin-top:50%;">PROYECTO CORTE FAMILIAR</div>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight: 300;margin-top:0.5em;"><i class="fa-solid fa-bed"></i> 3 <i class="fa-solid fa-ruler"></i> 163.53 mts² <i class=" fa-solid fa-bath"></i> 3 baños</p>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight:300;margin-top:-1px">Desde<strong> US$ 280,539.00</strong></p>
            <div class="btn">

            </div>
        </div>


        </a>
        <div class="favorito" style="margin-left: 9em;margin-top:-14em;">
    <a target="_blank" href="https://api.whatsapp.com/send/?phone=18094756318&text&app_absent=0" ><i style="color:white" class="text-white h2 bi bi-heart"></i></a>
    </div>
    <div class="localizacion" style="margin-top:-14em;margin-left:-1em;">
    <p style="font-family:Poppins;font-size:12px;font-weight: 300;"><i class="fa-solid fa-location-dot"></i>Bella Vista</p>
    </div>
    </div>    
        </div>
        <div class="swiper-slide">
            <!--Tarjeta 5 -->
            <div class="card2 " style="padding: 2em 1em 2em 2em;background-image: url(assets/img/Propiedades/cosmos.jpg);background-size: cover;z-index: 22;height: 15em;width: 73%;border-radius:10px">
    <a target="_blank" href="https://www.ofertainmobiliariard.com/propiedad/1414-exclusivo-proyecto-ubicado-en-cana-rock-1414">
    <div class="content" style="text-align:left; color:white;text-decoration:none;margin-left:-1.5em;" >
    <div class="title" style="font-size: 24px;text-decoration:none;margin-top:50%;">COSMOS EXCLUSIVO PROYECTO</div>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight: 300;margin-top:0.5em;"><i class="fa-solid fa-bed"></i> 1 <i class="fa-solid fa-ruler"></i> 48.81 mts² <i class=" fa-solid fa-bath"></i> 2 baños</p>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight:300;margin-top:-1px">Desde<strong> US$ US$ 236,499.00</strong></p>
            <div class="btn">

            </div>
        </div>


        </a>
        <div class="favorito" style="margin-left: 9em;margin-top:-14em;">
    <a target="_blank" href="https://api.whatsapp.com/send/?phone=18094756318&text&app_absent=0" ><i style="color:white" class="text-white h2 bi bi-heart"></i></a>
    </div>
    <div class="localizacion" style="margin-top:-14em;margin-left:-1em;">
    <p style="font-family:Poppins;font-size:12px;font-weight: 300;"><i class="fa-solid fa-location-dot"></i>Punta Cana</p>
    </div>
    </div>    
        </div>
        <div class="swiper-slide">
            <!--Tarjeta 6 -->
            <div class="card2 " style="padding: 2em 1em 2em 2em;background-image: url(assets/img/Propiedades/casadecampo.jpg);background-size: cover;z-index: 22;height: 15em;width: 73%;border-radius:10px">
    <a target="_blank" href="https://www.ofertainmobiliariard.com/propiedad/1461-180404-elegantes-y-lujosas-villas-en-ciudad-las-canas-1461">
    <div class="content" style="text-align:left; color:white;text-decoration:none;margin-left:-1.5em;" >
    <div class="title" style="font-size: 24px;text-decoration:none;margin-top:50%;">VILLA CIUDAD LAS CANAS</div>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight: 300;margin-top:0.5em;"><i class="fa-solid fa-bed"></i> 3 <i class="fa-solid fa-ruler"></i> 260.00 mts² <i class=" fa-solid fa-bath"></i> 2 baños</p>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight:300;margin-top:-1px">Desde<strong> RD$335,500.00 </strong></p>
            <div class="btn">

            </div>
        </div>


        </a>
        <div class="favorito" style="margin-left: 6.5em;margin-top:-14em;">
    <a target="_blank" href="https://api.whatsapp.com/send/?phone=18094756318&text&app_absent=0" ><i style="color:white" class="text-white h2 bi bi-heart"></i></a>
    </div>
    <div class="localizacion" style="margin-top:-14em;margin-left:-1em;">
    <p style="font-family:Poppins;font-size:12px;font-weight: 300;"><i class="fa-solid fa-location-dot"></i>Las Canas</p>
    </div>
    </div>    
        </div>
        <div class="swiper-slide">
            <!--Tarjeta 7 -->
            <div class="card2 " style="padding: 2em 1em 2em 2em;background-image: url(assets/img/Propiedades/vistacanaproyectos.jpg);background-size: cover;z-index: 22;height: 15em;width: 73%;border-radius:10px">
    <a target="_blank" href="https://www.ofertainmobiliariard.com/propiedad/1411-exclusivo-proyecto-de-apartamentos-ubicados-en-vista-cana-1411">
    <div class="content" style="text-align:left; color:white;text-decoration:none;margin-left:-1.5em;" >
    <div class="title" style="font-size: 24px;text-decoration:none;margin-top:50%;">APARTAMENTOS EN VISTA CANA</div>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight: 300;margin-top:0.5em;"><i class="fa-solid fa-bed"></i> 3 <i class="fa-solid fa-ruler"></i> 132.09 mts² <i class=" fa-solid fa-bath"></i> 3 baños</p>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight:300;margin-top:-1px">Desde<strong> US$ 1,010,000.00</strong></p>
            <div class="btn">

            </div>
        </div>


        </a>
        <div class="favorito" style="margin-left: 9em;margin-top:-14em;">
    <a target="_blank" href="https://api.whatsapp.com/send/?phone=18094756318&text&app_absent=0" ><i style="color:white" class="text-white h2 bi bi-heart"></i></a>
    </div>
    <div class="localizacion" style="margin-top:-14em;margin-left:-1em;">
    <p style="font-family:Poppins;font-size:12px;font-weight: 300;"><i class="fa-solid fa-location-dot"></i>Cap Cana</p>
    </div>
    </div>    
        </div>
        <div class="swiper-slide">
            <!--Tarjeta 8 -->
            <div class="card2 " style="padding: 2em 1em 2em 2em;background-image: url(assets/img/Propiedades/black.png);background-size: cover;z-index: 22;height: 15em;width: 73%;border-radius:10px">
    <a target="_blank" href="https://www.ofertainmobiliariard.com/propiedad/1411-exclusivo-proyecto-de-apartamentos-ubicados-en-vista-cana-1411">
    <div class="content" style="text-align:left; color:white;text-decoration:none;margin-left:-1.5em;" >
    <div class="title" style="font-size: 24px;text-decoration:none;margin-top:50%;">------------<br>------------</div>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight: 300;margin-top:0.5em;"><i class="fa-solid fa-bed"></i> --- <i class="fa-solid fa-ruler"></i> --- mts² <i class=" fa-solid fa-bath"></i> --- baños</p>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight:300;margin-top:-1px">Desde<strong> US$ --- </strong></p>
            <div class="btn">

            </div>
        </div>


        </a>
        <div class="favorito" style="margin-left: 9em;margin-top:-14em;">
    <a target="_blank" href="https://api.whatsapp.com/send/?phone=18094756318&text&app_absent=0" ><i style="color:white" class="text-white h2 bi bi-heart"></i></a>
    </div>
    <div class="localizacion" style="margin-top:-14em;margin-left:-1em;">
    <p style="font-family:Poppins;font-size:12px;font-weight: 300;"><i class="fa-solid fa-location-dot"></i>-----</p>
    </div>
    </div>    
        </div>
        <div class="swiper-slide">
            <!--Tarjeta 9 -->
            <div class="card2 " style="padding: 2em 1em 2em 2em;background-image: url(assets/img/Propiedades/black.png);background-size: cover;z-index: 22;height: 15em;width: 73%;border-radius:10px">
    <a target="_blank" href="https://www.ofertainmobiliariard.com/propiedad/1411-exclusivo-proyecto-de-apartamentos-ubicados-en-vista-cana-1411">
    <div class="content" style="text-align:left; color:white;text-decoration:none;margin-left:-1.5em;" >
    <div class="title" style="font-size: 24px;text-decoration:none;margin-top:50%;">------------<br>------------</div>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight: 300;margin-top:0.5em;"><i class="fa-solid fa-bed"></i> --- <i class="fa-solid fa-ruler"></i> --- mts² <i class=" fa-solid fa-bath"></i> --- baños</p>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight:300;margin-top:-1px">Desde<strong> US$ --- </strong></p>
            <div class="btn">

            </div>
        </div>


        </a>
        <div class="favorito" style="margin-left: 9em;margin-top:-14em;">
    <a target="_blank" href="https://api.whatsapp.com/send/?phone=18094756318&text&app_absent=0" ><i style="color:white" class="text-white h2 bi bi-heart"></i></a>
    </div>
    <div class="localizacion" style="margin-top:-14em;margin-left:-1em;">
    <p style="font-family:Poppins;font-size:12px;font-weight: 300;"><i class="fa-solid fa-location-dot"></i>-----</p>
    </div>
    </div>    
        </div>
        <div class="swiper-slide">
            <!--Tarjeta 10 -->
            <div class="card2 " style="padding: 2em 1em 2em 2em;background-image: url(assets/img/Propiedades/black.png);background-size: cover;z-index: 22;height: 15em;width: 73%;border-radius:10px">
    <a target="_blank" href="https://www.ofertainmobiliariard.com/propiedad/1411-exclusivo-proyecto-de-apartamentos-ubicados-en-vista-cana-1411">
    <div class="content" style="text-align:left; color:white;text-decoration:none;margin-left:-1.5em;" >
    <div class="title" style="font-size: 24px;text-decoration:none;margin-top:50%;">------------<br>------------</div>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight: 300;margin-top:0.5em;"><i class="fa-solid fa-bed"></i> --- <i class="fa-solid fa-ruler"></i> --- mts² <i class=" fa-solid fa-bath"></i> --- baños</p>
            <p style="font-size:14px;color:white;text-decoration:none;font-weight:300;margin-top:-1px">Desde<strong> US$ --- </strong></p>
            <div class="btn">

            </div>
        </div>


        </a>
        <div class="favorito" style="margin-left: 9em;margin-top:-14em;">
    <a target="_blank" href="https://api.whatsapp.com/send/?phone=18094756318&text&app_absent=0" ><i style="color:white" class="text-white h2 bi bi-heart"></i></a>
    </div>
    <div class="localizacion" style="margin-top:-14em;margin-left:-1em;">
    <p style="font-family:Poppins;font-size:12px;font-weight: 300;"><i class="fa-solid fa-location-dot"></i>-----</p>
    </div>
    </div>    
        </div>
        <!--Fin Slider-->

      </div>

    </div>
</div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4.2,
        spaceBetween: -50,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        autoplay: {
        delay: 7000,
 },
      });
    </script>
</div>


    </div>
</div>

</div>


<div class="row" style="margin-top:3%">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h2 class="text-center mediumm upercase2 ">ELIGE TU <span style="color:#1dbfe2"> DESTINO FAVORITO</span></h2>
        <hr style="width:50%; margin:auto;">
        <h5 class="text-center"style="width:500px;margin:auto; margin-top:1em; margin-bottom:3em">Tenemos proyectos en los mejores destinos del Caribe, Punta Cana, Las Terrenas, Santo Domingo. Donde estarás explorando nuevas formas, que te permitirán disfrutar de una vida exclusiva y tranquila.</h5>
    </div>
    <div class="col-md-3"></div>
</div>

<div class="container-md">
<div class="row"  style="margin-left:-5px">
        <div class="text-center col-md-2 imagenes-galeria1" style="margin-right: 0.6em;width: 15.7em;height: 200px;background-image:url(assets/img/Propiedades/punta-cana.jpg); background-size:cover;background-repeat: no-repeat;"><a style="text-decoration:none; color:black" href="https://www.ofertainmobiliariard.com/propiedades?city=60&country=149&currency=RD&listing_type=1&page=1"><div><h4 class=" gris-fondo1 text-center ">Punta Cana</h4></div></a></div>
        <div class="text-center col-md-2 imagenes-galeria1" style="margin-right: 0.7em;width: 15.7em;height: 200px;background-image:url(assets/img/Propiedades/lasterrenas.jpeg); background-size:cover;background-repeat: no-repeat"><a style="text-decoration:none; color:black" href="https://www.ofertainmobiliariard.com/propiedades?city=95&country=149&currency=RD&listing_type=1&page=1"><div><h4 class=" gris-fondo1 text-center ">Las Terrenas</h4></div></a></div>
        <div class="text-center col-md-2 imagenes-galeria1" style="margin-right: 0.7em;width: 15.7em;height: 200px;background-image:url(assets/img/Propiedades/bavaro.png); background-size:cover;background-repeat: no-repeat"><a style="text-decoration:none; color:black" href="https://www.ofertainmobiliariard.com/propiedades?city=59&country=149&currency=RD&listing_type=1&page=1"><div><h4 class=" gris-fondo1 text-center ">Bavaro</h4></div></a></div>
        <div class="text-center col-md-2 imagenes-galeria1" style="margin-right: 0.7em;width: 15.7em;height: 200px;background-image:url(assets/img/Propiedades/elcortesito.jpeg); background-size:cover;background-repeat: no-repeat"><a style="text-decoration:none; color:black" href="https://www.ofertainmobiliariard.com/propiedades?city=60&country=149&currency=RD&listing_type=1&page=2"><div><h4 class=" gris-fondo1 text-center ">El Cortesito</h4></div></a></div>
        <div class="text-center col-md-2 imagenes-galeria1" style="margin-right: 0.7em;width: 15.7em;height: 200px;background-image:url(assets/img/Propiedades/laromana.jpg); background-size:cover;background-repeat: no-repeat"><a style="text-decoration:none; color:black" href="https://www.ofertainmobiliariard.com/propiedades?city=66&country=149&currency=RD&listing_type=1&page=1"><div><h4 class=" gris-fondo1 text-center ">La Romana</h4></div></a></div>
        <div class="text-center col-md-2 imagenes-galeria1" style="margin-right: -10em;width: 15.7em;height: 200px;background-image:url(assets/img/Propiedades/Santo-Domingo.jpeg); background-size:cover;background-repeat: no-repeat"><a style="text-decoration:none; color:black" href="https://www.ofertainmobiliariard.com/propiedades?city=156&country=149&currency=RD&listing_type=1&page=1"><div><h4 class=" gris-fondo1 text-center">Santo Domingo</h4></div></a></div>
</div>
</div>





<div class="row">
<div class="col-md-12  mg-tp text-center">
<button class="button-white5">Ver Mas</button>
</div>
</div>

<br>
<br>

    <div class="row">
<div class="col-md-12 mg-tp">
    <div class="seccion-negra">
        <div class="seccion-negra bg-dark">
            <h2 style="font-family:Poppins; padding-top:1.5em; padding-left:10em" class="seccion-negra medium2 text-white ">¿Estás pensando en invertir?</h2>
        </div>
        <div class="into-seccion-negra"style="text-decoration:none">
       <button style="margin-left:85em; margin-top:-8em"class="button-white4" onclick="redcontactos();">Contáctanos <i class="bi h4 bi-person-bounding-box"></i></button>
        </div>
    </div>


</div>
<div class="row" style="margin-top: 2px;">
<div class="col-md-2"></div>
<div class="col-md-6">
    <h3  style="font-family:Poppins;font-size:2em; font-weight:500">@ofertainmobiliariard</h3>
</div>

<div class="col-md-2">
    <a target="_blank" href="https://www.ofertainmobiliariard.com/">
    <button class="letter-space button-white5" style="width: 270px;">VISITAR PERFIL<i class="icon-button bi bi-instagram"></i></button>
    </a>
</div>
<div class="col-md-2"></div>
</div>

</div>
<br>
<br>
            </div>
            <!--DiV Instagram-->
<div class="container-xl">
  <div class="row ml-1" style="margin-top:-3em">

    <div class="col-md-7" style="margin-left:-7.5em">
    <div class="row">
        <!--1-->
        <div class="col-sm-4"style="margin-right:-3em; margin-bottom:-3em">
        <div class="ocultamiento">
        <h5 class="gray-bg2"><iframe src="https://www.instagram.com/p/CdETGXYoST6/embed" width="200" height="320" frameborder="0" scrolling="no" allowtransparency="true"></iframe></h5>
        </div>
        </div>
        <!--2-->
        <div class="col-sm-4"style="margin-right:-3em; margin-bottom:-3em">
        <div class="ocultamiento">
        <h5 class="gray-bg2"><iframe src="https://www.instagram.com/p/CdDq-lWLxmm/embed" width="200" height="320" frameborder="0" scrolling="no" allowtransparency="true"></iframe></h5>
        </div>
        </div>
        <!--3-->
        <div class="col-sm-4"style="margin-bottom:-3em">
        <div class="ocultamiento">
        <h5 class="gray-bg2"><iframe src="https://www.instagram.com/p/CdCb4xYJbCX/embed" width="200" height="320" frameborder="0" scrolling="no" allowtransparency="true"></iframe></h5>
        </div>
        </div>
        <!--4-->
        <div class="col-sm-4" style="margin-left:1em;margin-right:-3.5em; margin-bottom:-3em">
        <div class="ocultamiento">            
        <h5 class="gray-bg2"><iframe src="https://www.instagram.com/p/CdBvi_xof-l/embed" width="200" height="320" frameborder="0" scrolling="no" allowtransparency="true"></iframe></h5>
        </div>
        </div>
        <!--5-->
        <div class="col-sm-4" style="margin-right:-3.5em; margin-bottom:-3em">
        <div class="ocultamiento">
        <h5 class="gray-bg2"><iframe src="https://www.instagram.com/p/CdBJCNGtaXW/embed" width="200" height="320" frameborder="0" scrolling="no" allowtransparency="true"></iframe></h5>
        </div>
        </div>
        <!--6-->
        <div class="col-sm-4"  style="margin-bottom:-3em" >
        <div class="ocultamiento">
        <h5 class="gray-bg2"><iframe src="https://www.instagram.com/p/Cc_5MZ-KOUI/embed" width="200" height="320" frameborder="0" scrolling="no" allowtransparency="true"></iframe></h5>
        </div>
        </div>
        </div>
        <!--7-->
        <div class="col-sm-4"style="margin-right:-3em; margin-bottom:-3em">
        <div class="ocultamiento">
        <h5 class="gray-bg2"><iframe src="https://www.instagram.com/p/Cc_BP_ZqIG9/embed" width="200" height="320" frameborder="0" scrolling="no" allowtransparency="true"></iframe></h5>
        </div>
        </div>
        <!--8-->
        <div class="col-sm-4"style="margin-right:-3em; margin-bottom:-3em">
        <div class="ocultamiento">
        <h5 class="gray-bg2"><iframe src="https://www.instagram.com/p/Cc-eFHpP8kH/embed" width="200" height="320" frameborder="0" scrolling="no" allowtransparency="true"></iframe></h5>
            </div>
        </div>
        <!--9-->
        <div class="col-sm-4" style="margin-bottom:-3em">
        <div class="ocultamiento">
        <h5 class="gray-bg2"><iframe src="https://www.instagram.com/p/Cc9JfXSP6BD/embed" width="200" height="320" frameborder="0" scrolling="no" allowtransparency="true"></iframe></h5>
        </div>
        </div>
    </div>

    <div style="margin-left:7.5em;"class="col-md-4 mg-tp3 text-right">

      <h3 style="font-size:32px; " class="text-info Poppins medium2 text-right mg-br">NUESTROS CONTENIDOS</h3>
      <hr  style="width:10em;height:3px;margin-left: 19.5em;">
      <h4 style="right:0;font-size:18px;margin-right:-4em" class="Poppins mini6 text-right mg-br">Estamos innovando nuestras pagina con un contenido de valor único, donde te enseñamos a cuidar de tu inversión y a tener conocimiento a la hora de adquirir un inmueble. Contamos con un canal de Youtube y Podcast.</h4>
            <br><div> <a href="https://www.youtube.com/channel/UCESBsUguDOiF0hmNDWG7grg" target="_blank" rel="noopener noreferrer"><br><button style="margin-right:0em" class="button-white5">YouTube<i  class="icon-button2 text-danger bi bi-youtube"></i></button></a></div>
    </div>
    <div class="col-md-1"></div>

  </div>
</div>


</div>

</div>
        </div>
<div class="row" style="margin-top:5em; ">
<div class="col-md-2 bg-dark"></div>
<div class="col-md-8">
    <div class="row bg-dark">
    <div class="col-md-12">
            <div class="row bg-dark text-white">
                <div class="col-md-4 ">
            <img src="assets/img/LogoHorizontal.png"  width="50%" alt="Logo" style="margin-left:6.5em; margin-top:2.5em">
            <p class="text-justify" style="color:white;font-size:1em;margin-top:1em;font-size:14px;font-weight:300;font-family:Poppins;padding-left:1em;padding-right:1em;padding-top:1em"> Nuestro equipo esta entrenado con amplios
            conocimientos de las actuales tendencias del
            mercado inmobiliario, de las prácticas de
            bienes raíces en la República Dominicana, así
            como de las leyes y regulaciones que la rigen.</p>
            <a target="_blank"   href="https://www.instagram.com/ofertainmobiliariard"><i style=" color:white;margin-left:3em;margin-right:15px" class="h2  bi bi-instagram" style="text-decoration:none;padding-left:2.3em"></i></a><a target="_blank"  href="https://es-la.facebook.com/ofertainmobiliariado/"><i style="color:white;margin-right:15px" class="h2 m-3 bi bi-facebook"></i></a><a target="_blank" href="https://api.whatsapp.com/send/?phone=18095555555&text&app_absent=0"><i style="color:white;margin-right:15px" class="h2 m-3 bi bi-whatsapp"></i></a><a target="_blank" href="https://do.linkedin.com/company/ofertainmobiliariard"><i style="color:white;margin-right:15px" class="h2 m-3 bi bi-linkedin"></i></a>
            <p style="padding-bottom:1em;"></p>
            <div style="margin-left:4em;" class="bg-dark text-info">
           
            </div></div>
                <div class="col-md-4 left-line" style="padding-left:5em">
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
                </div>
                <div class="col-md-4 bg-dark left-line"  style="padding-left:3em">
        <p style="padding-top:1em;  padding-bottom:-10cm; font-size:2em;font-family:Poppins; font-weight:500">¿QUÉ BUSCAS?</p>
        <a href="../index.php"><p style="color:white;text-decoration:none;padding-bottom:-10cm;font-family:Poppins;"><i class="bi bi-caret-right"></i>INICIO</p></a>
        <p style="padding-bottom:-10cm;font-family:Poppins;"><i class="bi bi-caret-right"></i><a style="text-decoration:none; color:white" href="views/nosotros.php">NOSOTROS</a></p>
        <p style="padding-bottom:-10cm;font-family:Poppins;"><i class="bi bi-caret-right"></i><a style="text-decoration:none; color:white" href="views/nosotros.php">LUXURY</a></p>
        <p style="padding-bottom:-10cm;font-family:Poppins;"><i class="bi bi-caret-right"></i><a style="text-decoration:none; color:white" href="views/nosotros.php">CONTACTOS</a></p></div>
        
            </div>
    </div>
  
</div>

</div>
<div class="col-md-2 bg-dark"></div>
<div class="row bg-dark">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <hr style="border-color:white;width:100%; margin-top:8.5%">
        <p class="text-white" style="margin-bottom:2em">2022 | Oferta Inmobiliaria RD. Todos los derechos reservados.</p>
    </div>
    <div class="col-md-2"></div>
</div>
</div>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: "auto",
        spaceBetween: -30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },

      });
    </script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
        </body>