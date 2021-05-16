
Gato(); 
Cao();

 

function Gato(){
    let AbrirMenu = 0
    const Gato = document.querySelector(".Gato");
    const GatoUL = document.querySelector(".GatoUL");
    Gato.addEventListener("click", () => {
        if(AbrirMenu == 0){
            GatoUL.style = "display: flex";
            AbrirMenu = 1;
        }else{
            GatoUL.style = "display: none";
            AbrirMenu = 0;
        }
    })

}

function Cao(){
    let AbrirMenu = 0
    const Gato = document.querySelector(".Cao");
    const GatoUL = document.querySelector(".CaoUL");
    Gato.addEventListener("click", () => {
        if(AbrirMenu == 0){
            GatoUL.style = "display: flex";
            AbrirMenu = 1;
        }else{
            GatoUL.style = "display: none";
            AbrirMenu = 0;
        }
    })

}