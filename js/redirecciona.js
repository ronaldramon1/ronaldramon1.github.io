function redireccionar(){
setTimeout( function() { window.location.href = "../views/admin_login.php"; }, 5000 );
}

function redireccionarYoutube(){
    setTimeout( function() { window.location.href = "https://www.youtube.com/c/OfertaInmobiliariaRD/"; });
    }

function redireccionarBlog(){
    setTimeout( function() { window.location.href = "../views/blog.php"; });
    }


function redireccionarPropiedades(){
    setTimeout( function() { window.location.href = "https://www.ofertainmobiliariard.com/propiedades"; });
}

const navbar = document.querySelector('.nav-fixed');
window.onscroll = () => {
    if (window.scrollY > 300) {
        navbar.classList.add('nav-active');
    } else {
        navbar.classList.remove('nav-active');
    }
};


