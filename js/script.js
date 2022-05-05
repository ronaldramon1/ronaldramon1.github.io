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

addEventListener('DOMContentLoaded', () => {
  
  const botonMVV = document.querySelector('#botonMVV')
  const obtener_pixeles_inicio = () => document.documentElement.ScrollTop || document.body.scrollTop;
  
  const moverMVV = () => {
    if (obtener_pixeles_inicio() === 0)  {
        requestAnimationFrame(moverMVV)
        scrollTo(750,750)
    }
  }

  botonMVV.addEventListener('click', moverMVV)
  })
