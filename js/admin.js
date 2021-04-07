const inicio = document.getElementById("inicio");
const torneos = document.getElementById("torneos");
const usuario = document.getElementById("usuarios");

inicio.addEventListener("click",function(){
    vistaInicio();
});

torneos.addEventListener("click",function(){
    vistaTorneos();
});

usuario.addEventListener("click",function(){
    vistaUsuarios();
});

function vistaTorneos() {
    const http = new XMLHttpRequest();
    const url = "../views/torneos.php";

    http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }    
    }    
    http.open("GET",url);
    http.send();
    document.getElementById("inicio").classList.remove('active');
    document.getElementById("usuarios").classList.remove('active');
    document.getElementById("torneos").classList.add('active');
}    



function vistaUsuarios() {
    const http = new XMLHttpRequest();
    const url = "../views/usuarios.php";

    http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    }
    http.open("GET",url);
    http.send();

    document.getElementById("inicio").classList.remove('active');
    document.getElementById("torneos").classList.remove('active');
    document.getElementById("usuarios").classList.add('active');
}

function vistaInicio() {
    const http = new XMLHttpRequest();
    const url = "../views/home.php";

    http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML = this.responseText;
        }
    }
    http.open("GET",url);
    http.send();

    document.getElementById("inicio").classList.add('active');
    document.getElementById("torneos").classList.remove('active');
    document.getElementById("usuarios").classList.remove('active');
}