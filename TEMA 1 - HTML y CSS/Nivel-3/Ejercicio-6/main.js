window.onload=inicio;

function inicio(){
    document.querySelector("#botonMenu").onclick=abrirMenu;
    document.querySelector("#cerrarMenu").onclick=cerrarMenu;
}

function abrirMenu(){
    document.getElementById("botonMenu").style.display="none";
    document.getElementById("menuDespl").style.display="flex";
}

function cerrarMenu(){
    document.getElementById("botonMenu").style.display="inline-block";
    document.getElementById("menuDespl").style.display="none";
}