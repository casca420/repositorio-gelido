var imagens = [
    "banner 1.jpg",
    "banner 2.jpg",
    "banner 3.webp",
];

var indice = 0;

var banner = document.getElementById('banner');

function monstrarImagens() {
    banner.src = imagens[indice];
}

function Ir() {
    indice++;
    if (indice >= imagens.length) {
        indice = 0;
    }
    monstrarImagens();

    reiniciarAutoSlide();
}

function Voltar() {
    indice--;
    if (indice < 0) {
        indice = imagens.length - 1;
    }
    monstrarImagens();

    reiniciarAutoSlide();
}


var tempo = 4000; 
var slideInterval; 

function autoSlide() {
    slideInterval = setInterval(Ir, tempo);
}

function reiniciarAutoSlide() {
    clearInterval(slideInterval); 
    autoSlide();
}


monstrarImagens();
autoSlide();
