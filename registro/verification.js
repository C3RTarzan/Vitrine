window.onload = () =>{
    verification();
}   
function verification(){
        const nickid = document.querySelector("#nick");
        const emailid = document.querySelector("#email");
        const passwordid = document.querySelector("#password");
        const password2id = document.querySelector("#password2");


        nickid.style = "border-color: red; transform: scale(1.01)"
        emailid.style = "border-color: red; transform: scale(1.01)"
        passwordid.style = "border-color: red; transform: scale(1.01)"
        password2id.style = "border-color: red; transform: scale(1.01)" 

        
}