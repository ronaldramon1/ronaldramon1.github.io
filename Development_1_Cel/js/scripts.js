function mostrarNavbar(){
    document.getElementById('navbar').style.display = 'block';
    document.getElementById('desplegable').style.display = 'none';
    document.getElementById('encogedor').style.display = 'block';

} 

function ocultarNavbar(){
    document.getElementById('navbar').style.display = 'none';
    document.getElementById('desplegable').style.display = 'block';
    document.getElementById('encogedor').style.display = 'none';

} 


window.addEventListener('load', function(){
    new Glider(document.querySelector('.carruselll'));
});

function iniciarMap(){
    var coord = {lat:-34.5956145 ,lng: -58.4431949};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}



addEventListener('DOMContentLoaded', ()=>{
  
    const botonMVV = document.querySelector('#botonMVV')
    const obtener_pixeles_inicio = () => document.documentElement.ScrolllTop || document.body.scrollTop;
    
    const moverMVV = () => {
      if (obtener_pixeles_inicio() === 0)  {
        scrollTo(550,550)
      }
    }
    botonMVV.addEventListener('click', moverMVV)
    })
    