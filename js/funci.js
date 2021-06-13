//Funciones de Login
var getData = function() {
    var name = document.getElementById("name").value;
    var passw = document.getElementById("passw").value;
    if (name == "" && passw == "") {
        document.getElementById("name").focus();
        alert("Campos Vacios");
    } else {
        if (name == "") {
            alert("Campo usuario vacio");
            document.getElementById("name").focus();
        } else {
            if (passw == "") {
                alert("Campo contraseña vacio");
                document.getElementById("passw").focus();
            } else {
                if (name.length < 8 && passw.length < 8 || name.length < 8 || passw.length < 8) {
                    alert("Caracteres insuficientes");
                    document.getElementById("name").value = "";
                    document.getElementById("passw").value = "";
                    document.getElementById("name").focus();
                } else {
                    if (name != "" && passw != "" && name.length >= 8 && passw.length >= 8) {
                        alert("Bienvenido" + " " + name);
                        document.getElementById("name").value = "";
                        document.getElementById("passw").value = "";
                        window.location = 'home.html';
                    }
                }
            }
        }
    }

}

var get = function() {

    var mensaje = confirm("¿Deseas eliminar este cliente");
    //Detectamos si el usuario acepto el mensaje
    if (mensaje) {
        alert("Cliente eliminado");
        window.location = "./cliente-actualizar.php";
    }

}



/*-- Menu Toggle Script */

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$(function() {

    // elementos de la lista
    var menues = $("div a");

    // manejador de click sobre todos los elementos
    menues.click(function() {
        // eliminamos active de todos los elementos
        menues.removeClass("active");
        // activamos el elemento clicado.
        $(this).addClass("active");
    });

});

//Desplegar submenú clientes
$('.fea-btn').click(function() {
    $('div ul .cli-show').toggleClass("show");
    $('div ul .firt').toggleClass("rotate");
});

$('i').click(function() {
    $(this).toggleClass('icon-up');
});

$('button').click(function() {
    $(this).toggleClass('icon-right-big');
});
//Desplegar submenú movimientos
$('.feat-btn').click(function() {
    $('div ul .feat-show').toggleClass("show");
    $('div ul .first').toggleClass("rotate");
});

//Desplegar submenú reportes
$('.feats-btn').click(function() {
    $('div ul .feap-show').toggleClass("show");
    $('div ul .fit').toggleClass("rotate");
});