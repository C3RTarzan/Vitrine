window.onload = () =>{
    Gato(); 
    Cao(); 
    navAccont();
}

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

function navAccont(){
    let coint = 0
    const navAccont = document.querySelector(".navAccont")
    const iconAccont = document.querySelector(".iconAccont");
    iconAccont.addEventListener("click", () => {
        if(coint == 1){
            navAccont.style = "display: none";
            iconAccont.style = "color: #fff"
            coint = 0
        }else{
            navAccont.style = "display: flex";
            iconAccont.style = "color: #000"
            coint = 1
        }
        
    })
}
