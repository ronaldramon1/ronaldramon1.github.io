function mostrarCrear(){
    document.getElementById('crear').style.display = 'block';
    document.getElementById('eliminar').style.display = 'none';
    document.getElementById('editar').style.display = 'none';
    document.getElementById('pulsaunboton').style.display = 'none';
} 
function mostrarEditar(){
    document.getElementById('editar').style.display = 'block';
    document.getElementById('eliminar').style.display = 'none';
    document.getElementById('crear').style.display = 'none';
    document.getElementById('pulsaunboton').style.display = 'none';
} 
function mostrarEliminar(){
    document.getElementById('eliminar').style.display = 'block';
    document.getElementById('editar').style.display = 'none';
    document.getElementById('crear').style.display = 'none';
    document.getElementById('pulsaunboton').style.display = 'none';
} 
function mostrarRegistro(){
    document.getElementById('registro').style.display='block';
}

function ocultarRegistro(){
    document.getElementById('registro').style.display='none';
}

function limpiar() {
    var content=window.clipboardData.getData("Text");
    if(content==null){
    window.clipboardData.clearData();
    }
    setTimeout("limpiar();",1000);
    }