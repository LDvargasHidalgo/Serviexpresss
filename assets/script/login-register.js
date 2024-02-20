//Ejecutando funciones cuando de click en el btn X
document.getElementById("btn_login").addEventListener("click", login);
document.getElementById("btn_register").addEventListener("click", register);
window.addEventListener("resize", PageWidth);

//Declarar las variables
var form_login = document.querySelector(".form_login");
var form_register = document.querySelector(".form_register");
var container_login_register = document.querySelector(".container_login_register");
var back_box_login = document.querySelector(".back_box_login");
var back_box_register = document.querySelector(".back_box_register");

 //FUNCIONES

 /* Ajustar el responsive */
function PageWidth(){

    if (window.innerWidth > 850){
        back_box_register.style.display = "block";
        back_box_login.style.display = "block";
    }else{
        back_box_register.style.display = "block";
        back_box_register.style.opacity = "1";
        back_box_login.style.display = "none";
        form_login.style.display = "block";
        container_login_register.style.left = "0px";
        form_register.style.display = "none";   
    }
}

anchoPage();

/* Cuando damos Click en el btn iniciar sesión  llama a la funcion y nos abre el formulario de iniciar sesion  */
    function login(){
        if (window.innerWidth > 850){
            form_login.style.display = "block";
            container_login_register.style.left = "10px";
            form_register.style.display = "none";
            back_box_register.style.opacity = "1";
            back_box_login.style.opacity = "0";
        }else{
            form_login.style.display = "block";
            container_login_register.style.left = "0px";
            form_register.style.display = "none";
            back_box_register.style.display = "block";
            back_box_login.style.display = "none";
        }
    }

    /* Cuando damos Click en el btn register llama a la funcion y nos abre el formulario de registrarse  */
    function register(){
        if (window.innerWidth > 850){
            form_register.style.display = "block";
            container_login_register.style.left = "410px";
            form_login.style.display = "none";
            back_box_register.style.opacity = "0";
            back_box_login.style.opacity = "1";
        }else{
            form_register.style.display = "block";
            container_login_register.style.left = "0px";
            form_login.style.display = "none";
            back_box_register.style.display = "none";
            back_box_login.style.display = "block";
            back_box_login.style.opacity = "1";
        }
}

/* NAVBAR */
document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.navigation');

    menuToggle.addEventListener('click', function () {
        navigation.classList.toggle('active'); // Toggle la clase 'active' para mostrar/ocultar la navegación
    });
});