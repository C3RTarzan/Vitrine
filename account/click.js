
clickemail();
bcclear();

function bcclear(){
    const emailcontainer = document.querySelector(".emailcontainer");
    const bc = document.querySelector(".bc");   
    bc.addEventListener("click", (e) =>{
        if(e.target == bc){
            bc.style = "display: none";
        }
    })
}

function clickemail(){
    const email = document.querySelector(".email");
    const bc = document.querySelector(".bc");
    email.addEventListener("click", () =>{
        bc.style = "display: flex";
        bc.focus();
    })
}