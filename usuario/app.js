const navbar = document.querySelector("#navbar");
const contenedor = document.querySelector("#contenedor");
const body = document.querySelector("body");
window.addEventListener("scroll", function(){
    if(contenedor.getBoundingClientRect().top<10){
        navbar.classList.add("scroll")
    }
    else{
        navbar.classList.remove("scroll")
    }
})