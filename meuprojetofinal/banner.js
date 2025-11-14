        var imagens = [
            "banner 1.jpg",
            "banner 2.jpg",
            "banner 3.webp",
        ];
 
        var indice = 0;
 
        var banner = document.getElementById('banner');
 
        function monstrarImagens(){
            banner.src = imagens[indice];
        }
 
        function Ir(){
            //incrementar o indice
            indice++;
            if(indice >= imagens.length){
                indice = 0;
            }
            monstrarImagens();
 
        }
        function Voltar(){
            indice--;
            if(indice < 0){
                 indice = imagens.length - 1;  
            }
            monstrarImagens();
        }