window.onload = () =>{
    navAccont();
}

function navAccont(){
    let coint = 0
    const navAccont = document.querySelector(".navAccont")
    const iconAccont = document.querySelector(".iconAccont");
    iconAccont.addEventListener("click", () => {
        if(coint == 1){
            navAccont.style = "display: none";
            iconAccont.style = "color: #000"
            coint = 0
        }else{
            navAccont.style = "display: flex";
            iconAccont.style = "color: #fff"
            coint = 1
        }
        
    })
}
